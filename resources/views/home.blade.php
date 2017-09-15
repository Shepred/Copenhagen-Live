@extends('layout.master')
    @section('content')
        <main>
        <!-- ============================================================= SECTION – MAIN SLIDER HERO ============================================================= -->
            
            <section id="hero" class="inner-bottom-sm">
                 <div id="owl-main" class="owl-carousel height-lg owl-inner-nav owl-ui-lg">
                    
                    <div class="item" style="background-image: url({{ asset('assets/images/banners/1.jpg') }});">
                        <div class="container">
                            <div class="caption vertical-bottom text-right">
                                
                                <h1 class="fadeInUp-2 light-bg dark-color"><span>COPENHAGEN LIVE {{ date("Y") }}</span></h1>
                                <p class="fadeInUp-2 light-bg dark-color"><span class="hero">0600Z - 2200 Z - 16 hours of staffing. Saturday, the 16th of September 2017.</span></p>
                                
                            </div><!-- /.caption -->
                        </div><!-- /.container -->
                    </div><!-- /.item -->
                    
                    <div class="item" style="background-image: url({{ asset('assets/images/banners/2.jpg') }});">
                        <div class="container">
                            <div class="caption vertical-bottom text-right">
                                
                                <h1 class="light-bg dark-color"><span>COPENHAGEN LIVE {{ date("Y") }}</span></h1>
                                <p class="light-bg dark-color"><span class="hero">0600Z - 2200 Z - 16 hours of staffing. Saturday, the 16th of September 2017.</span></p>
                                
                            </div><!-- /.caption -->
                        </div><!-- /.container -->
                    </div><!-- /.item -->
                    
                    <div class="item" style="background-image: url({{ asset('assets/images/banners/3.jpg') }});">
                        <div class="container">
                            <div class="caption vertical-bottom text-right">
                                
                                <h1 class="light-bg dark-color"><span>COPENHAGEN LIVE {{ date("Y") }}</span></h1>
                                <p class="light-bg dark-color"><span class="hero">0600Z - 2200 Z - 16 hours of staffing. Saturday, the 16th of September 2017.</span></p>
                                
                            </div><!-- /.caption -->
                        </div><!-- /.container -->
                    </div><!-- /.item -->
                    
                    <div class="item" style="background-image: url({{ asset('assets/images/banners/4.jpg') }});">
                        <div class="container">
                            <div class="caption vertical-bottom text-right">
                                
                                <h1 class="light-bg dark-color"><span>COPENHAGEN LIVE {{ date("Y") }}</span></h1>
                                <p class="light-bg dark-color"><span class="hero">0600Z - 2200 Z - 16 hours of staffing. Saturday, the 16th of September 2017.</span></p>
                                
                            </div><!-- /.caption -->
                        </div><!-- /.container -->
                    </div><!-- /.item -->
                    
                    <div class="item" style="background-image: url({{ asset('assets/images/banners/5.jpg') }});">
                        <div class="container">
                            <div class="caption vertical-bottom text-right">
                                
                                <h1 class="light-bg dark-color"><span>COPENHAGEN LIVE {{ date("Y") }}</span></h1>
                                <p class="light-bg dark-color"><span class="hero">0600Z - 2200 Z - 16 hours of staffing. Saturday, the 16th of September 2017.</span></p>
                                
                            </div><!-- /.caption -->
                        </div><!-- /.container -->
                    </div><!-- /.item -->
                    
                </div><!-- /.owl-carousel -->
            </section>
            <section id="information">
                <div class="container inner inner-bottom">
                    <div class="row text-center inner-bottom">
                        <img src="{{ asset('/assets/images/vatsca.png') }}" />
                    </div>
                    <div class="row">
                        
                        <div class="col-sm-6 inner-right-xs text-right aos-init aos-animate" data-aos="fade-up">
                            <figure><a href="#information"><img src="{{ asset('assets/images/banners/event.jpg') }}" alt=""></a></figure>
                        </div><!-- /.col -->
                        
                        <div class="col-sm-6 inner-top-xs inner-left-xs">
                            <h2>Bookings are now closed.</h2>
                            <p>Thank you for the massive interest in Copenhagen Live {{ date("Y") }}! As the event nears, we have now closed for further bookings.</p>
                            <p>All participants who have booked will receive a dispatch e-mail before the event begins. If you have not booked and you still want to fly, fear not! Simply load up your favourite flightsim, connect to VATSIM & fly!</p>
                        </div><!-- /.col -->
                        
                    </div><!-- /.row -->
                    
                    <div class="row inner-top-md">
                        
                        <div class="col-sm-6 col-sm-push-6 inner-left-xs">
                            <figure><a href="#information"><img src="{{ asset('assets/images/banners/6.jpg') }}" alt=""></a></figure>
                        </div><!-- /.col -->
                        
                        <div class="col-sm-6 col-sm-pull-6 inner-top-xs inner-right-xs">
                            <h2>16 hours of staffing!</h2>
                            <p>And that's just on the Saturday! The controllers behind are gathered the entire weekend. As such you may surely count on decent coverage in the Copenhagen FIR throughout the weekend.</p>
                        </div><!-- /.col -->
                        
                    </div><!-- /.row -->
                    
                    <div class="row inner-top-md">
                        
                        <div class="col-sm-6 inner-right-xs text-right">
                            <figure><a href="#information"><img src="{{ asset('assets/images/banners/7.jpg') }}" alt=""></a></figure>
                        </div><!-- /.col -->
                        
                        <div class="col-sm-6 inner-top-xs inner-left-xs">
                            <h2>Competitions!</h2>
                            <p>The controller team behind this year's installment of Copenhagen Live have teamed up with numerous developers, and as such are proud to present a wide range of competitions throughout the day.</p>
                            <p>
                                <img class="sponsor" src="{{ asset('/assets/images/sponsors/aerosoft.png') }}" />
                                <img class="sponsor" src="{{ asset('/assets/images/sponsors/vidandesign.png') }}" />
                                <br>
                                <img class="sponsor" src="{{ asset('/assets/images/sponsors/fs2crew.png') }}" />
                                <img class="sponsor" src="{{ asset('/assets/images/sponsors/flytampa.png') }}" />
                            </p>
                            <a href="{{ url('/competitions') }}" class="txt-btn">More details here!</a>
                        </div><!-- /.col -->
                        
                    </div><!-- /.row -->
                
                </div><!-- /.container -->
            </section>
            <section id="faq" class="light-bg">
                <div class="container inner">
                    
                    <div class="row">
                        <div class="col-md-8 col-sm-9 center-block text-center">
                            <header>
                                <h1>Questions?</h1>
                                <p>Below you'll find some of the most frequently asked questions. If your question isn't answered below, feel free to get in touch using the contact form below.</p>
                            </header>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    
                    <div class="row">
                    
                        <div class="col-sm-6 inner-right-sm inner-top-sm">
                            
                            <h3>I want to make a booking. Does it have to be a real world flight?</h3>
                            <p>No. You can make your flight excactly the way you like it. If you have a favorite callsign or a route not flown on the day, it's all in your power to do so. However, should you choose to book a real world flight, our systems assign you the real world stand, as well as priority, should slots be necessary.</p>
                            
                            <h3>I want to participate in one of your competitions. How do I do it?</h3>
                            <p>All competitions are based on the amount of sectors you complete, the time of landings and departures. Therefore all you have to do is to complete your flight and you will automatically enroll in all applicable competitions.</p>

                            <h3>Is it possible to book more than one flight, including numerous arrivals and departures?</h3>
                            <p>Of course! All bookings are saved to your VATSIM ID. If you select the same airline or callsign for an inbound or outbound flight, we will automatically assign you the gate that matches your round trip. If you want to make sure the gate is changed for any reason, please let is know in the remarks of your booking.</p>
                            
                        </div><!-- /.col -->
                    
                        <div class="col-sm-6 inner-left-sm inner-top-sm">                 
                            <h3>I can't make it to the event anyway, how do I delete my booking?</h3>
                            <p>If you are hindered from participating in the event, kindly log in above and press the "X" icon on your booking. This will delete it and free up the callsign for use by other pilots during the event.</p>

                            <h3>For how long will I be able to book?</h3>
                            <p>As it will be a significant task to organize all of the incoming bookings, we expect to close bookings 24 to 48 hours before the event begins. Once the time is set in stone, we will announce it.</p>
                            
                            <h3>How will I know if I have been assigned a slot or a stand number?</h3>
                            <p>Once we have processed all of the bookings, we will send out information to the e-mail you have provided us with when you booked. If you for some reason haven't received an e-mail, simply log in and view your assigned slot and stand on the website.</p>
                            
                        </div><!-- /.col -->
                        
                    </div><!-- /.row -->
                    
                </div><!-- /.container -->
            </section>
        </main>
    @endsection