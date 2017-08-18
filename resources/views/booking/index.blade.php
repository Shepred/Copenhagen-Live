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
                                            <a class="panel-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#content2">
                                                <span>View Existing Bookings</span>
                                            </a>
                                        </h4>
                                    </div><!-- /.panel-heading -->
                                    
                                    <div id="content2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <p>Magnis modipsae que lib voloratati andigen daepeditem quiate ut reporemni aut labor. Laceaque quiae sitiorem rest non restibusaes tumquam core posae volor remped modis volor. Dolorem qui comlus temp dolupta oreprerum tibusam. Eumenis et consent accullignis dentibea autem inisita posae volor conecus resto explabo.</p>
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
            <div class="modal fade" id="createBooking" tabindex="-1" role="dialog" aria-labelledby="createBooking" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="icon-cancel-1"></i></span></button>
                            <h4 class="modal-title" id="createBooking">Create a new booking</h4>
                        </div><!-- /.modal-header -->
                        
                        <!-- ============================================================= MODAL CONTENT ============================================================= -->
                        
                        <div class="modal-body">
                            
                            <!-- ============================================================= SECTION – PORTFOLIO POST ============================================================= -->
                            
                            <section id="portfolio-post">
                                <div class="container inner-top-xs inner-bottom">
                                    
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <form method="POST" action="/booking">
                                                <label for="callsign">Callsign</label>
                                                <input type="text" class="form-control" name="callsign" id="callsign"/>

                                                <label for="destination">Destination</label>
                                                <input type="text" class="form-control" name="destination" id="destination"/>

                                                <label for="aircraft">Aircraft Type</label>
                                                <input type="text" class="form-control" name="aircraft" id="aircraft"/>

                                                <label for="sobt">Scheduled Off-Block Time</label>
                                                <input type="text" class="form-control" name="sobt" id="sobt"/>

                                                <label for="email">E-mail Address</label>
                                                <input type="email" class="form-control" name="email" id="email"/>

                                                <label for="remarks">Remarks</label>
                                                <textarea class="form-control" name="remarks" id="remarks"></textarea>
                                            </form>
                                        </div><!-- /.col -->
                                    </div><!-- /.row -->
                                    
                                    <div class="row inner-top-xs reset-xs">
                                        
                                        <div class="col-sm-7 inner-top-xs inner-right-xs">
                                            <header>
                                                <h2>Service information</h2>
                                                <p class="text-normal">Magnis modipsae que lib voloratati andigen daepeditem quiate ut reporemni labor. Laceaque quiae sitiorem rest non restibusaes es tumquam core posae volor remped modis volor. Doloreiur qui commolu ptatemp dolupta oreprerum tibusam. Eumenis etus consent accullignis dentibea autem inisita posae volor conecus resto explabo.</p>
                                                <p class="text-normal">Soloreiur qui commolu ptatemp dolupta oreprerum tibusam emnis et consent accullignis. Laceaque quiae sitiorem rest non restibusaes es tumquam core posae voloris remped modis doloreiur qui commolu dolupta oreprerum et consent.</p>
                                            </header>
                                        </div><!-- /.col -->
                                        
                                        <div class="col-sm-4 col-sm-offset-1 outer-top-xs inner-left-xs border-left">
                                            <ul class="item-details">
                                                <li class="date">June 12, 2015</li>
                                                <li class="categories">Motion graphics</li>
                                                <li class="client">Mobile company</li>
                                                <li class="url"><a href="http://demo.fuviz.com/reen">demo.fuviz.com/reen</a></li>
                                            </ul><!-- /.item-details -->
                                        </div><!-- /.col -->
                                        
                                    </div><!-- /.row -->
                                    
                                </div><!-- /.container -->
                                
                            </section>
                            
                            <!-- ============================================================= SECTION – PORTFOLIO POST : END ============================================================= -->
                            
                        </div><!-- /.modal-body -->
                        
                        <!-- ============================================================= MODAL CONTENT : END ============================================================= -->
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-lg btn-block" data-dismiss="modal">Save Booking</button>
                        </div><!-- /.modal-footer -->
                        
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </main>
    @endsection