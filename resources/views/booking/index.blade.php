@extends('layout.master')
    @section('content')
        <main>
            <section id="booking" class="light-bg">
                <div class="container inner">
                    <div class="row">
                        <div class="col-md-8 col-sm-9 center-block text-center">
                            <header>
                                <h1>Bookings</h1>
                                <p>Here you'll be able to create, edit or delete your bookings for Copenhagen Live {{ date("Y") }}.<br>Simply click below and follow the instructions.</p>
                            </header>
                        </div><!-- /.col -->
                    </div><!-- ./row -->
                    
                    <div class="row">
                        
                        <div class="col-sm-6 inner-top">
                            <form action="{{ url('/booking/create/departure') }}">
                                <input class="btn btn-default btn-lg btn-block" type="submit" value="Create a new departure booking" />
                            </form>
                        </div><!-- /.col -->
                        <div class="col-sm-6 inner-top">
                            <form action="{{ url('/booking/create/arrival') }}">
                                <input class="btn btn-default btn-lg btn-block" type="submit" value="Create a new arrival booking" />
                            </form>
                        </div><!-- /.col -->
                        
                    </div><!-- /.row -->
                    @if (count($departureBookings))
                    <div class="row">
                    <div class="col-sm-12 inner-top">
                            <div id="accordion" class="panel-group">
                                <div class="panel panel-default">             
                                    <div class="panel-heading text-center">
                                        <h4 class="panel-title">
                                            <a class="panel-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#departureBookings">
                                                <span>View Existing Departure Bookings</span>
                                            </a>
                                        </h4>
                                    </div><!-- /.panel-heading -->
                                    
                                    <div id="departureBookings" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <table class="table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Callsign</th>
                                                        <th class="text-center">Origin</th>
                                                        <th class="text-center">Destination</th>
                                                        <th class="text-center">Aircraft Type</th>
                                                        <th class="text-center">Scheduled Off-Block Time</th>
                                                        <th>E-mail Address</th>
                                                        <th>Remarks</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                        @foreach ($departureBookings as $booking)
                                                        <tr>
                                                        <td class="text-center">{{$booking->callsign}}</td>
                                                        <td class="text-center">{{$booking->origin}}</td>
                                                        <td class="text-center">{{$booking->destination}}</td>
                                                        <td class="text-center">{{$booking->aircraft}}</td>
                                                        <td class="text-center">{{$booking->sobt}} Z</td>
                                                        <td>{{$booking->email}}</td>
                                                        <td>{{$booking->remarks}}</td>
                                                        <td class="text-center"><a href="{{ route('booking.delete', $booking->callsign) }}" data-toggle="tooltip" title="Delete Booking"><i class="icon-cancel-1"></i></a></td>
                                                    </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div><!-- /.panel-body -->
                                    </div><!-- /.content -->
                                    
                                </div><!-- /.panel -->
                            </div><!-- /.accordion -->
                        </div><!-- /.col -->
                    </div>
                    @endif
                    @if (count($arrivalBookings))
                    <div class="row">
                    <div class="col-sm-12 inner-top">
                            <div id="accordion" class="panel-group">
                                <div class="panel panel-default">             
                                    <div class="panel-heading text-center">
                                        <h4 class="panel-title">
                                            <a class="panel-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#arrivalBookings">
                                                <span>View Existing Arrival Bookings</span>
                                            </a>
                                        </h4>
                                    </div><!-- /.panel-heading -->
                                    
                                    <div id="arrivalBookings" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <table class="table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">Callsign</th>
                                                        <th class="text-center">Origin</th>
                                                        <th class="text-center">Destination</th>
                                                        <th class="text-center">Aircraft Type</th>
                                                        <th class="text-center">Scheduled Time of Arrival</th>
                                                        <th>E-mail Address</th>
                                                        <th>Remarks</th>
                                                        <th class="text-center">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    
                                                    @foreach ($arrivalBookings as $booking)
                                                        <tr>
                                                        <td class="text-center">{{$booking->callsign}}</td>
                                                        <td class="text-center">{{$booking->origin}}</td>
                                                        <td class="text-center">{{$booking->destination}}</td>
                                                        <td class="text-center">{{$booking->aircraft}}</td>
                                                        <td class="text-center">{{$booking->eta}} Z</td>
                                                        <td>{{$booking->email}}</td>
                                                        <td>{{$booking->remarks}}</td>
                                                        <td class="text-center"><a href="{{ route('booking.delete', $booking->callsign) }}" data-toggle="tooltip" title="Delete Booking"><i class="icon-cancel-1"></i></a></td>
                                                    </tr>
                                                    @endforeach
                                                    
                                                </tbody>
                                            </table>
                                        </div><!-- /.panel-body -->
                                    </div><!-- /.content -->
                                    
                                </div><!-- /.panel -->
                            </div><!-- /.accordion -->
                        </div><!-- /.col -->
                    </div>
                    @endif
                </div>
            </section>
            <section id="stats">
                <div class="container inner">
                    
                    <div class="row">
                        <div class="col-md-8 col-sm-9 center-block text-center">
                            <header>
                                <h1>Who else is flying?</h1>
                                <p>Below you'll find an overview of how many flights have been booked for Copenhagen Live {{ date("Y") }}.</p>
                            </header>
                        </div><!-- /.col -->
                    </div><!-- ./row -->
                    <div class="row inner-top-sm text-center">
                        
                        <div class="col-sm-3 inner-bottom-xs">
                            <div class="icon">
                                <i class="icon-flight icn lg"></i>
                            </div><!-- /.icon -->
                            <h2>{{$stats['flights']}} Flights</h2>
                        </div><!-- /.col -->
                        
                        <div class="col-sm-3 inner-bottom-xs">
                            <div class="icon">
                                <i class="icon-up-1 icn lg"></i>
                            </div><!-- /.icon -->
                            <h2>{{$stats['departures']}} Departures</h2>
                        </div><!-- /.col -->
                        
                        <div class="col-sm-3 inner-bottom-xs">
                            <div class="icon">
                                <i class="icon-down-1 icn lg"></i>
                            </div><!-- /.icon -->
                            <h2>{{$stats['arrivals']}} Arrivals</h2>
                        </div><!-- /.col -->
                        
                        <div class="col-sm-3 inner-bottom-xs">
                            <div class="icon">
                                <i class="icon-users-1 icn lg"></i>
                            </div><!-- /.icon -->
                            <h2>{{ $stats['uniquePilots'] }} Unique Pilots</h2>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    
                </div><!-- /.container -->
            </section>
        </main>

    @endsection