@extends('layout.master')
    @section('content')
        <main>
            <section id="booking" class="light-bg">
                <div class="container inner">
                    
                    <div class="row">
                        <div class="col-md-8 col-sm-9 center-block text-center">
                            <header>
                                <h1>Competitions!</h1>
                                <p>Everybody loves a good competition, right?<br>To make the day extra special we have arranged several competetions throughout the day, with prices from several renowned vendors!</p>
                                <p>Please note that, in order for your flights to count, they must all be registered on our website.</p>
                                 
                            </header>
                        </div><!-- /.col -->
                    </div><!-- ./row -->
                    
                    <div class="row">
                        
                        <div class="col-sm-12 inner-top">
                            <div class="tabs tabs-2-big-top tab-container">
                                
                                <ul class="etabs text-center">
                                    
                                    <li class="tab">
                                        <a href="#flier-of-the-day">
                                            <h3>Flier of the Day</h3>
                                            <p class="text-small">Flights as far as the eye can see. Do you have the entire day set aside? Look no further.</p>
                                        </a><!-- /#tab-1 -->
                                    </li><!-- /.tabs -->
                                    
                                    <li class="tab">
                                        <a href="#morning-rush">
                                            <h3>Morning Rush</h3>
                                            <p class="text-small">Early bird? Enjoy the first hours of the sun while your depart Copenhagen.</p>
                                        </a><!-- /#tab-2 -->
                                    </li><!-- /.tabs -->

                                    <li class="tab">
                                        <a href="#midday-turnaround">
                                            <h3>Midday Turnaround</h3>
                                            <p class="text-small">Lunch in Copenhagen? Make it quick, you've only got 45 minutes!</p>
                                        </a><!-- /#tab-2 -->
                                    </li><!-- /.tabs -->
                                    
                                    <li class="tab">
                                        <a href="#evenings-legs">
                                            <h3>Evening Legs</h3>
                                            <p class="text-small">Returning home after a long day of flying? We've got the stand ready.</p>
                                        </a><!-- /#tab-2 -->
                                    </li><!-- /.tabs -->
                                </ul><!-- /.etabs -->
                                
                                <div class="panel-container text-center">
                                    
                                    <div class="tab-content" id="flier-of-the-day">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2>Flier of the Day</h2>
                                                <p>We encourage flying as much as possible into Copenhagen. Therefore the main competition are for people who get many legs out of Copenhagen. Everybody who logs more than 6 legs which involves Copenhagen is in the competition for the new Aerosoft CRJ. In this context a leg is a flight that includes Copenhagen as either Departure aerodrome or arrival aerodrome. All the high sector flyers will be published at the end of the event!</p>
                                                <p>How to enter competition: Fly 6 legs which include Copenhagen as either departure or arrival aerodrome.</p>
                                                <p>Prizes: 1 x Aerosoft CRJ 700/900</p>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </div><!-- /.tab-content -->
                                    
                                    <div class="tab-content" id="morning-rush">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2>Morning Rush</h2>
                                                <p>The morning rush! All of your passengers are waiting to get down south on vacation, up north to visit family or simply attend business meetings. Either way, the early departures are important, and you have be on time.To encourage early birds, everyone who departs Copenhagen between 0600Z and 0700Z will have a chance to win a FlyTampa product of their own choosing. If that's a bit too early for you, depart between 0700Z and 0830Z and have the chance of winning Aerosoft's Bali X.</p>
                                                <p>How to enter competition: Depart Copenhagen between 0600Z and 0730Z</p>
                                                <p>Prizes: 1 x FlyTampa product X & 1 x Aerosoft Bali X</p>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </div><!-- /.tab-content -->
 
                                    <div class="tab-content" id="midday-turnaround">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2>Midday Turnaround</h2>
                                                <p>This competition is open to everyone who flies into Copenhagen, makes a turnaround and flies out again between 1000Z and 1300Z. Stay close to your flight plan, make a quick turnaround and you might be the lucky one.</p>
                                                <p>How to enter competition: Fly into Copenhagen, do a turnaround and depart again between 1000Z and 1300Z. Max turnaround time is 45 minutes.</p>
                                                <p>Prizes: 1 x Aerosoft Trondheim Vaernes V2 & 1 x FS2Crew product</p>
                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </div><!-- /.tab-content -->     
                                    <div class="tab-content" id="evenings-legs">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2>Evening Legs</h2>

                                                <p>When the day is over everybody must return to base. Everybody landing in Copenhagen between 2030Z and 2200Z will automatically enter this competition. Whether if you depart Copenhagen once more or take the rest of the night off is up to you, it won't affect your entry.
                                                <p>How to enter competition: Land in Copenhagen between 2030Z and 2200Z.</p>
                                                <p>Prizes: 1 x Vidan Design Billund & 1 x Vidan Design Jylland/Sjælland</p>

                                            </div><!-- /.col -->
                                        </div><!-- /.row -->
                                    </div><!-- /.tab-content -->    

                                </div><!-- /.panel-container -->
                                 
                            </div><!-- /.tabs -->
                        </div><!-- /.col -->
                        
                    </div><!-- /.row -->
                </div>
            </section>
        </main>
    @endsection