@extends('layout.master')
    @section('content')
        <main>
        <!-- ============================================================= SECTION – MAIN SLIDER HERO ============================================================= -->
            
            <section id="hero" class="inner-bottom-sm">
                 <div id="owl-main" class="owl-carousel height-lg owl-inner-nav owl-ui-lg">
                    
                    <div class="item" style="background-image: url({{ asset('assets/images/banners/1.jpg') }});">
                        <div class="container">
                            <div class="caption vertical-bottom text-right">
                                
                                <h1 class="fadeInUp-1 light-bg dark-color"><span>COPENHAGEN LIVE {{ date("Y") }}</span></h1>
                                <p class="fadeInUp-2 light-color">16 hours of staffing. Saturday, the 16th of September 2017.</p>
                                
                            </div><!-- /.caption -->
                        </div><!-- /.container -->
                    </div><!-- /.item -->
                    
                    <div class="item" style="background-image: url({{ asset('assets/images/banners/2.jpg') }});">
                        <div class="container">
                            <div class="caption vertical-bottom text-right">
                                
                                <h1 class="light-bg dark-color"><span>COPENHAGEN LIVE {{ date("Y") }}</span></h1>
                                <p class="light-color">16 hours of staffing. Saturday, the 16th of September 2017.</p>
                                
                            </div><!-- /.caption -->
                        </div><!-- /.container -->
                    </div><!-- /.item -->
                    
                    <div class="item" style="background-image: url({{ asset('assets/images/banners/3.jpg') }});">
                        <div class="container">
                            <div class="caption vertical-bottom text-right">
                                
                                <h1 class="light-bg dark-color"><span>COPENHAGEN LIVE {{ date("Y") }}</span></h1>
                                <p class="light-color">16 hours of staffing. Saturday, the 16th of September 2017.</p>
                                
                            </div><!-- /.caption -->
                        </div><!-- /.container -->
                    </div><!-- /.item -->
                    
                    <div class="item" style="background-image: url({{ asset('assets/images/banners/4.jpg') }});">
                        <div class="container">
                            <div class="caption vertical-bottom text-right">
                                
                                <h1 class="light-bg dark-color"><span>COPENHAGEN LIVE {{ date("Y") }}</span></h1>
                                <p class="light-color">16 hours of staffing. Saturday, the 16th of September 2017.</p>
                                
                            </div><!-- /.caption -->
                        </div><!-- /.container -->
                    </div><!-- /.item -->
                    
                    <div class="item" style="background-image: url({{ asset('assets/images/banners/5.jpg') }});">
                        <div class="container">
                            <div class="caption vertical-bottom text-right">
                                
                                <h1 class="light-bg dark-color"><span>COPENHAGEN LIVE {{ date("Y") }}</span></h1>
                                <p class="light-color">16 hours of staffing. Saturday, the 16th of September 2017.</p>
                                
                            </div><!-- /.caption -->
                        </div><!-- /.container -->
                    </div><!-- /.item -->
                    
                </div><!-- /.owl-carousel -->
            </section>

            <section id="information">
                <div class="container inner">
                    
                    <div class="row">
                        
                        <div class="col-sm-6 inner-right-xs text-right aos-init aos-animate" data-aos="fade-up">
                            <figure><a href="#information"><img src="{{ asset('assets/images/banners/event.jpg') }}" alt=""></a></figure>
                        </div><!-- /.col -->
                        
                        <div class="col-sm-6 inner-top-xs inner-left-xs">
                            <h2>Bookings are now open!</h2>
                            <p>Looking to participate in this yearly event? If you aren't a controller and you can't physically make it to Denmark, perhaps flying is the choice for you. Why don't you let us know when and where you're planning to fly to our virtrual homeland?</p>
                            <a href="{{ url('/booking') }}" class="txt-btn">Create your booking now!</a>
                        </div><!-- /.col -->
                        
                    </div><!-- /.row -->
                    
                    <div class="row inner-top-md">
                        
                        <div class="col-sm-6 col-sm-push-6 inner-left-xs">
                            <figure><a href="#modal-product01" data-toggle="modal"><img src="{{ asset('assets/images/banners/6.jpg') }}" alt=""></a></figure>
                        </div><!-- /.col -->
                        
                        <div class="col-sm-6 col-sm-pull-6 inner-top-xs inner-right-xs">
                            <h2>16 hours of staffing!</h2>
                            <p>And that's just on the Saturday! The controllers behind are gathered the entire weekend. As such you may surely count on decent coverage in the Copenhagen FIR throughout the weekend.</p>
                        </div><!-- /.col -->
                        
                    </div><!-- /.row -->
                    
                    <div class="row inner-top-md">
                        
                        <div class="col-sm-6 inner-right-xs text-right">
                            <figure><a href="#modal-product01" data-toggle="modal"><img src="{{ asset('assets/images/banners/7.jpg') }}" alt=""></a></figure>
                        </div><!-- /.col -->
                        
                        <div class="col-sm-6 inner-top-xs inner-left-xs">
                            <h2>wtb selling point :/</h2>
                            <p>Magnis modipsae que lib voloratati andigen daepeditem quiate ut reporemni aut labor. Laceaque quiae sitiorem rest non restibusaes es tumquam core posae volor remped modis volor. Doloreiur qui commolu ptatemp dolupta oreprerum tibusam emnis et consent accullignis.</p>
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
                                <p>Below you'll find some of the most frequently asked questions.<br>If your questions isn't answered below, feel free to get in touch using the contact form below.</p>
                            </header>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    
                    <div class="row">
                    
                        <div class="col-sm-6 inner-right-sm inner-top-sm">
                            
                            <h3>Q #!</h3>
                            <p>Conecus iure posae volor remped modis aut accabora incim resto explabo eictemperum quiae sitiorem volor remped modis volor.</p>
                            
                            <h3>Q #2</h3>
                            <p>Conecus iure posae volor remped modis aut accabora incim resto explabo eictemperum quiae sitiorem volor remped modis volor.</p>
                            
                            <h3>Q #3</h3>
                            <p>Conecus iure posae volor remped modis aut accabora incim resto explabo eictemperum quiae sitiorem volor remped modis volor.</p>
                            
                        </div><!-- /.col -->
                    
                        <div class="col-sm-6 inner-left-sm inner-top-sm">
                            
                            <h3>Q #4</h3>
                            <p>Conecus iure posae volor remped modis aut accabora incim resto explabo eictemperum quiae sitiorem volor remped modis volor.</p>
                            
                            <h3>Q #5</h3>
                            <p>Conecus iure posae volor remped modis aut accabora incim resto explabo eictemperum quiae sitiorem volor remped modis volor.</p>
                            
                            <h3>Q #6</h3>
                            <p>Conecus iure posae volor remped modis aut accabora incim resto explabo eictemperum quiae sitiorem volor remped modis volor.</p>
                            
                        </div><!-- /.col -->
                        
                    </div><!-- /.row -->
                    
                </div><!-- /.container -->
            </section>
            <section id="contact">
                <div class="container inner">
                    <div class="row">
                        <div class="col-md-8">
                            <h1>Contact Us</h1>
                            
                            <form id="contactform" class="forms" action="contact.php" method="post">
                                
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" class="form-control" placeholder="Name (Required)">
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                                
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control" placeholder="Email (Required)">
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                                
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                                
                                <div class="row">
                                    <div class="col-sm-12">
                                        <textarea name="message" class="form-control" placeholder="Enter your message ..."></textarea>
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                                
                                <button type="submit" class="btn btn-default btn-submit">Submit message</button>
                                
                            </form>
                            
                            <div id="response"></div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    @endsection