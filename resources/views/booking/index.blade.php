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
                        
                        <div class="col-sm-4 inner-top">
                            <form action="{{ url('/booking/create') }}">
                                <input class="btn btn-default btn-lg btn-block" type="submit" value="Create a new booking" />
                            </form>
                        </div><!-- /.col -->
                        
                        <div class="col-sm-4 inner-top">
                            <form action="{{ url('/booking/edit') }}">
                                <input class="btn btn-default btn-lg btn-block" type="submit" value="Edit a booking" />
                            </form>
                        </div><!-- /.col -->
                        
                        <div class="col-sm-4 inner-top">
                            <form action="{{ url('/booking/delete') }}">
                                <input class="btn btn-default btn-lg btn-block" type="submit" value="Delete a booking" />
                            </form>
                        </div><!-- /.col -->
                        
                    </div><!-- /.row -->
                    <div class="row">
                    <div class="col-sm-12 inner-top">
                            <div id="accordion" class="panel-group">
                                <div class="panel panel-default">             
                                    <div class="panel-heading text-center">
                                        <h4 class="panel-title">
                                            <a class="panel-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#existingBookings">
                                                <span>View Existing Bookings</span>
                                            </a>
                                        </h4>
                                    </div><!-- /.panel-heading -->
                                    
                                    <div id="existingBookings" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <table class="table table-responsive">
                                                <thead>
                                                    <tr>
                                                        <th>Callsign</th>
                                                        <th>Origin</th>
                                                        <th>Destination</th>
                                                        <th>Aircraft Type</th>
                                                        <th>Scheduled Off-Block Time</th>
                                                        <th>E-mail Address</th>
                                                        <th>Remarks</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-center">SAS539</td>
                                                        <td class="text-center">EKCH</td>
                                                        <td class="text-center">EGCC</td>
                                                        <td class="text-center">A319</td>
                                                        <td class="text-center">15:45Z</td>
                                                        <td>random.email@email.com</td>
                                                        <td>Y'all want some remarks?</td>
                                                        <td class="text-center"><a href="{{ url('/booking/edit') }}"><i class="icon-edit"></i></a>&nbsp;<a data-toggle="modal" href="#modal-confirmation"><i class="icon-cancel-1"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- /.panel-body -->
                                    </div><!-- /.content -->
                                    
                                </div><!-- /.panel -->
                            </div><!-- /.accordion -->
                        </div><!-- /.col -->
                    </div>
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
            <div class="modal fade" id="modal-confirmation" tabindex="-1" role="dialog" aria-labelledby="modal-confirmation" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="icon-cancel-1"></i></span></button>
                            <h4 class="modal-title" id="modal-confirmation">Are you sure?</h4>
                        </div><!-- /.modal-header -->
                        
                        <!-- ============================================================= MODAL CONTENT ============================================================= -->
                        
                        <div class="modal-body">
                            
                            <!-- ============================================================= SECTION – HERO ============================================================= -->
                            
                            <section>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8 inner-top inner-bottom">
                                        <p>Deleting your booking as an ireversible action that will free up your callsign for booking by others.</p>
                                        <p>Once your booking has been deleted, the only way to get it back is by booking the callsign again.</p>
                                        <p>If you wish to edit your booking, please use the edit function.</p>
                                        </div><!-- /.col -->
                                        
                                        <div class="col-md-4 inner-top inner-bottom">
                                            <h3>Booking Overview</h3>
                                            <ul class="contacts">
                                                <li><i class="icon-headphones contact"></i> SAS539</li>
                                                <li><i class="icon-home-1 contact"></i> EKCH</li>
                                                <li><i class="icon-paper-plane contact"></i> EGCC</li>
                                                <li><i class="icon-flight-1 contact"></i> A319</a></li>
                                            </ul><!-- /.contacts -->
                                        </div><!-- /.col -->
                                        
                                    </div><!-- ./row -->
                                </div><!-- /.container -->
                            </section>
                        </div><!-- /.modal-body -->
                        
                        <!-- ============================================================= MODAL CONTENT : END ============================================================= -->
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">I understand - Delete my booking</button>
                        </div><!-- /.modal-footer -->
                        
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </main>
    @endsection