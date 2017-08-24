<?php

namespace App\Http\Controllers;

use Auth;
use VatsimSSO;
use Session;
use Redirect;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;
use App\Http\Controllers\Controller;
use App\Airport;
use App\BookingDeparture;
use App\BookingArrival;
use App\Mail\ConfirmBooking;
use App\Mail\DeleteBooking;


class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('booking');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departures = BookingDeparture::select('id')->get()->pluck('id');
        $arrivals = BookingArrival::select('id')->get()->pluck('id');

        $uniquePilots = $departures->merge($arrivals)->unique()->count();        
                

        $stats = [
            'flights' => BookingDeparture::count() + BookingArrival::count(),
            'departures' => BookingDeparture::count(),
            'arrivals' => BookingArrival::count(),
            'uniquePilots' => $uniquePilots
        ];

        $user = Session::get('user');
        $departureBookings = BookingDeparture::where('id', $user->id)->get();
        $arrivalBookings = BookingArrival::where('id', $user->id)->get();

        return view('booking.index')->with(compact('user', 'departureBookings', 'arrivalBookings', 'stats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createDeparture()
    {
        $airports = Airport::get();
        return view('booking.create_departure')->with(compact('airports'));
    }

    public function createArrival()
    {
        $airports = Airport::get();
        return view('booking.create_arrival')->with(compact('airports'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeDeparture(Request $request)
    {
        //Validate inputs
        $this->validate(request(), [
            'callsign' => 'required|unique:arrival_bookings,callsign|unique:departure_bookings,callsign|min:4|max:7',
            'origin' => 'required|size:4',
            'destination' =>'required|size:4',
            'aircraft' => 'required|size:4',
            'sobt' => 'required',
            'email' => 'required|email',
            'remarks' => 'nullable',
            ]);

        //Save data to database
        $booking = BookingDeparture::create([
            'id' => Session::get('user')->id,
            'first_name' => Session::get('user')->name_first,
            'last_name' => Session::get('user')->name_last,
            'callsign' => $request['callsign'],
            'origin' => $request['origin'],
            'destination' => $request['destination'],
            'aircraft' => $request['aircraft'],
            'sobt' => $request['sobt'],
            'email' => $request['email'],
            'remarks' => $request['remarks'],
        ]);

        //Redirect to /booking with success message
        flash('Your booking has successfully been created!');

        //Send confirmation e-mail
        \Mail::to($request['email'])->send(new ConfirmBooking(Session::get('user'),$booking));

        //Redirect to /booking
        return redirect('/booking');

    }

    public function storeArrival(Request $request)
    {
        //Validate inputs
        $this->validate(request(), [
            'callsign' => 'required|unique:arrival_bookings,callsign|unique:departure_bookings,callsign|min:4|max:7',
            'origin' => 'required|size:4',
            'destination' =>'required|size:4',
            'aircraft' => 'required|size:4',
            'eta' => 'required',
            'email' => 'required|email',
            'remarks' => 'nullable',
            ]);

        //Save data to database
        $booking = BookingArrival::create([
            'id' => Session::get('user')->id,
            'first_name' => Session::get('user')->name_first,
            'last_name' => Session::get('user')->name_last,
            'callsign' => $request['callsign'],
            'origin' => $request['origin'],
            'destination' => $request['destination'],
            'aircraft' => $request['aircraft'],
            'eta' => $request['sta'],
            'email' => $request['email'],
            'remarks' => $request['remarks'],
        ]);

        //Redirect to /booking with success message
        flash('Your booking has successfully been created!');

        //Send confirmation e-mail
        \Mail::to($request['email'])->send(new ConfirmBooking(Session::get('user'),$booking));

        //Redirect to /booking
        return redirect('/booking');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($callsign)
    {
        // Get the user who is logged in
        $user = Session::get('user');
        $userId = $user->id;

        // Pull in the booking ID from the database
        $booking = BookingDeparture::where('callsign', $callsign)->where('id', $userId)->first();

        if(! $booking)
            $booking = BookingArrival::where('callsign', $callsign)->where('id', $userId)->first();

        //Check if the URI belongs to the logged in user
        if(! $booking || $booking->id != $userId) {
            flash('You do not have access to this booking.')->error();
            return redirect('/booking');
        }

        //Send email confirmation
        \Mail::to($booking->email)->send(new DeleteBooking(Session::get('user'), $booking));

        // Delete the flight from the database
        $booking->delete();

        //Flash the session with the message
        flash('Your booking has successfully been deleted!');

        //Redirect to /booking
        return redirect('/booking');
    }
}
