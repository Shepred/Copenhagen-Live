<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use \App\Booking;
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
        return view('booking.index')->with(compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Session::get('user');
        return view('booking.create')->with(compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate inputs
        $this->validate(request(), [
            'id' => 'required',
            'callsign' => 'required|unique:bookings,callsign|min:4|max:7',
            'origin' => 'required|size:4',
            'destination' =>'required|size:4',
            'aircraft' => 'required|size:4',
            'sobt' => 'required',
            'email' => 'required|email',
            'remarks' => 'nullable'
            ]);

        //Save data to database
        Booking::create(request(['id', 'callsign', 'origin', 'destination', 'aircraft', 'sobt', 'email', 'remarks']));

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
    public function destroy($id)
    {
        //
    }
}
