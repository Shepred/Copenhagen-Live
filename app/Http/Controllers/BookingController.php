<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use \App\BookingDeparture;
use \App\BookingArrival;
use Auth;
use VatsimSSO;
use Session;
use Redirect;

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
        $user = Session::get('user');
        $departureBookings = \App\BookingDeparture::where('id', $user->id)->get();
        $arrivalBookings = \App\BookingArrival::where('id', $user->id)->get();

        return view('booking.index')->with(compact('user', 'departureBookings', 'arrivalBookings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createDeparture()
    {
        $airports = \App\Airport::get();
        return view('booking.create_departure')->with(compact('airports'));
    }

    public function createArrival()
    {
        $airports = \App\Airport::get();
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
            'sta' => 'required',
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
            'sta' => $request['sta'],
            'email' => $request['email'],
            'remarks' => $request['remarks'],
        ]);

        //Redirect to /booking with success message
        flash('Your booking has successfully been created!');

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
        $booking = \App\BookingDeparture::where('callsign', $callsign)->where('id', $userId)->first();

        if(! $booking)
            $booking = \App\BookingArrival::where('callsign', $callsign)->where('id', $userId)->first();

        //Check if the URI belongs to the logged in user
        if(! $booking || $booking->id != $userId) {
            flash('You do not have access to this booking.')->error();
            return redirect('/booking');
        }

        // Delete the flight from the database
        $booking->delete();

        //Flash the session with the message
        flash('Your booking has successfully been deleted!');

        //Redirect to /booking
        return redirect('/booking');
    }
}
