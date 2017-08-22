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
                                                        <td class="text-center">{{$booking->sta}} Z</td>
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
            <section id="inspiration">
                <div class="container inner">
                    <div class="row">
                        <div class="col-md-8 col-sm-9 center-block text-center">
                            <header>
                                <h1>Looking for inspiration?</h1>
                                <p>Not sure what to fly for Copenhagen Live {{ date("Y") }}?<br>Look below for some real life flights happening on the day.</p>
                            </header>
                        </div><!-- /.col -->
                    </div><!-- ./row -->
                    <div class="row">
                        <div class="col-sm-12 inner-top-md">
                            <div id="owl-videos" class="owl-carousel owl-outer-nav owl-ui-md owl-item-gap">
                                
                                <div class="item">
                                    <figure>
                                    
                                        <div class="icon-overlay icn-link">
                                            <a href="slider-carousel.html"><img src="assets/images/art/work01.jpg" alt=""></a>
                                        </div><!-- /.icon-overlay -->
                                        
                                        <figcaption class="bordered no-top-border">
                                            <div class="info">
                                                <h4><a href="slider-carousel.html">EKCH - EGLL</a></h4>
                                                <p>BAW815</p>
                                            </div><!-- /.info -->
                                        </figcaption>
                                        
                                    </figure>
                                </div><!-- /.item -->
                            
                                <div class="item">
                                    <figure>
                                    
                                        <div class="icon-overlay icn-link">
                                            <a href="slider-carousel.html"><img src="assets/images/art/work02.jpg" alt=""></a>
                                        </div><!-- /.icon-overlay -->
                                        
                                        <figcaption class="bordered no-top-border">
                                            <div class="info">
                                                <h4><a href="slider-carousel.html">Grand Motel</a></h4>
                                                <p>Identity</p>
                                            </div><!-- /.info -->
                                        </figcaption>
                                        
                                    </figure>
                                </div><!-- /.item -->
                            
                                <div class="item">
                                    <figure>
                                    
                                        <div class="icon-overlay icn-link">
                                            <a href="slider-carousel.html"><img src="assets/images/art/work16.jpg" alt=""></a>
                                        </div><!-- /.icon-overlay -->
                                        
                                        <figcaption class="bordered no-top-border">
                                            <div class="info">
                                                <h4><a href="slider-carousel.html">Signwall</a></h4>
                                                <p>Identity</p>
                                            </div><!-- /.info -->
                                        </figcaption>
                                        
                                    </figure>
                                </div><!-- /.item -->
                            
                                <div class="item">
                                    <figure>
                                    
                                        <div class="icon-overlay icn-link">
                                            <a href="slider-carousel.html"><img src="assets/images/art/work08a.jpg" alt=""></a>
                                        </div><!-- /.icon-overlay -->
                                        
                                        <figcaption class="bordered no-top-border">
                                            <div class="info">
                                                <h4><a href="slider-carousel.html">Brand Stationery</a></h4>
                                                <p>Identity</p>
                                            </div><!-- /.info -->
                                        </figcaption>
                                        
                                    </figure>
                                </div><!-- /.item -->
                            
                                <div class="item">
                                    <figure>
                                    
                                        <div class="icon-overlay icn-link">
                                            <a href="slider-carousel.html"><img src="assets/images/art/work10.jpg" alt=""></a>
                                        </div><!-- /.icon-overlay -->
                                        
                                        <figcaption class="bordered no-top-border">
                                            <div class="info">
                                                <h4><a href="slider-carousel.html">Tri Fold Brochure</a></h4>
                                                <p>Print</p>
                                            </div><!-- /.info -->
                                        </figcaption>
                                        
                                    </figure>
                                </div><!-- /.item -->
                            
                                <div class="item">
                                    <figure>
                                    
                                        <div class="icon-overlay icn-link">
                                            <a href="slider-carousel.html"><img src="assets/images/art/work03.jpg" alt=""></a>
                                        </div><!-- /.icon-overlay -->
                                        
                                        <figcaption class="bordered no-top-border">
                                            <div class="info">
                                                <h4><a href="slider-carousel.html">Vintage Bicycles</a></h4>
                                                <p>Interactive</p>
                                            </div><!-- /.info -->
                                        </figcaption>
                                        
                                    </figure>
                                </div><!-- /.item -->
                            
                                <div class="item">
                                    <figure>
                                    
                                        <div class="icon-overlay icn-link">
                                            <a href="slider-carousel.html"><img src="assets/images/art/work18.jpg" alt=""></a>
                                        </div><!-- /.icon-overlay -->
                                        
                                        <figcaption class="bordered no-top-border">
                                            <div class="info">
                                                <h4><a href="slider-carousel.html">Modern CD Case</a></h4>
                                                <p>Print</p>
                                            </div><!-- /.info -->
                                        </figcaption>
                                        
                                    </figure>
                                </div><!-- /.item -->
                            
                                <div class="item">
                                    <figure>
                                    
                                        <div class="icon-overlay icn-link">
                                            <a href="slider-carousel.html"><img src="assets/images/art/work09.jpg" alt=""></a>
                                        </div><!-- /.icon-overlay -->
                                        
                                        <figcaption class="bordered no-top-border">
                                            <div class="info">
                                                <h4><a href="slider-carousel.html">Astor & Yancy</a></h4>
                                                <p>Identity</p>
                                            </div><!-- /.info -->
                                        </figcaption>
                                        
                                    </figure>
                                </div><!-- /.item -->
                            
                                <div class="item">
                                    <figure>
                                    
                                        <div class="icon-overlay icn-link">
                                            <a href="slider-carousel.html"><img src="assets/images/art/photograph02.jpg" alt=""></a>
                                        </div><!-- /.icon-overlay -->
                                        
                                        <figcaption class="bordered no-top-border">
                                            <div class="info">
                                                <h4><a href="slider-carousel.html">Daydreaming</a></h4>
                                                <p>Photography</p>
                                            </div><!-- /.info -->
                                        </figcaption>
                                        
                                    </figure>
                                </div><!-- /.item -->
                                
                            </div><!-- /.owl-carousel -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </section>
        </main>

    @endsection