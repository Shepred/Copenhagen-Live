@extends('layout.master')
    @section('content')
        <main>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-sm-9 center-block text-center inner-top">
                            <header>
                                <h1>Create a New Departure Booking</h1>
                                <p>Create a departure booking for Copenhagen Live {{ date("Y") }} here!<br>Simply fill out the form below & let us know when and where you're flying.</p>
                                <p>Kindly submit all inputs in the ICAO format.</p>
                            </header>
                        </div><!-- /.col -->
                    </div><!-- ./row -->
                    <div class="row justify-content-md-center">
              			<div class="col-lg-12 inner-top inner-bottom">
              				@include('layout.validation')
                         	<form method="POST" action="/booking/departure">
                         		{{ csrf_field() }}

                            	<label for="callsign">Callsign</label>
								<input type="text" class="form-control" name="callsign" id="callsign" placeholder="e.g. SAS539" required/>

								<label for="origin">Origin</label>
                                <select name="origin" id="origin" class="form-control" required>
                                    @foreach($airports as $airport)
                                        <option value="{{$airport->icao}}">{{$airport->icao}} - {{$airport->name}}</option>
                                    @endforeach
                                </select>

								<label for="destination">Destination</label>
								<input type="text" class="form-control" name="destination" id="destination" placeholder="e.g. EGCC" required/>

								<label for="aircraft">Aircraft Type</label>
								<input type="text" class="form-control" name="aircraft" id="aircraft" placeholder="e.g. A320" required/>

								<label for="sobt">Scheduled Off-Block Time</label>
        						<div class="input-group bootstrap-timepicker timepicker">
            						<input id="timepicker" type="text" class="form-control" name="sobt" placeholder="All times are listed in Zulu" required/>
            						<span class="input-group-addon"><i class="icon-back-in-time"></i></span>
        						</div>
								<label for="email">E-mail Address</label>
								<input type="email" class="form-control" name="email" id="email" required/>

 								<label for="remarks">Remarks</label>
								<textarea class="form-control" name="remarks" id="remarks"></textarea>

                                <input class="btn btn-default btn-lg btn-block" type="submit" value="Create booking"/>

                          	</form>
                        </div><!-- /.col -->
                        
                    </div><!-- /.row -->
                </div>
            </section>
        </main>
    @endsection