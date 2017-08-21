		<!-- ============================================================= FOOTER ============================================================= -->
		
		<footer class="dark-bg">		  
			<div class="footer-bottom">
				<div class="container inner">
					<p class="pull-left">© {{ date("Y") }} Jakob Lindved Marker. All rights reserved. All images used with permission by <a href="https://www.flickr.com/photos/99499838@N06/" target="_blank">Mikkel Johnsen</a>.</p>
						<ul class="footer-menu pull-right">
							<li>
								<a href="{{ url('/') }}">Home</a>
							</li>
							<li>
								<a href="{{ url('/booking') }}">Booking</a>
							</li>
							<li>
								<a href="{{ url('/') }}#faq">Frequently Asked Questions</a>
							</li>
							<li>
								<a href="{{ url('/contact') }}">Contact Us</a>
							</li>
								
							@if (session('vatsim_authed') == true)
							<li class="pull-right">
								<a href="{{ url('logout') }}"><i class="icon-logout"></i>&nbsp;Log out</a>
							</li>
							@else
							<li class="pull-right">
								<a href="{{ url('login') }}"><i class="icon-login"></i>&nbsp;Log in</a>
							</li>
							@endif
						</ul><!-- /.nav -->
				</div><!-- .container -->
			</div><!-- .footer-bottom -->
		</footer>
		
		<!-- ============================================================= FOOTER : END ============================================================= -->
		
		<!-- JavaScripts placed at the end of the document so the pages load faster -->
		<script src="{{ asset('/assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('/assets/js/jquery.easing.1.3.min.js') }}"></script>
		<script src="{{ asset('/assets/js/jquery.form.js') }}"></script>
		<script src="{{ asset('/assets/js/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('/assets/js/bootstrap-timepicker.min.js') }}"></script>
		<script src="{{ asset('/assets/js/aos.js') }}"></script>
		<script src="{{ asset('/assets/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('/assets/js/jquery.isotope.min.js') }}"></script>
		<script src="{{ asset('/assets/js/imagesloaded.pkgd.min.js') }}"></script>
		<script src="{{ asset('/assets/js/jquery.easytabs.min.js') }}"></script>
		<script src="{{ asset('/assets/js/viewport-units-buggyfill.js') }}"></script>
		<script src="{{ asset('/assets/js/scripts.js') }}"></script>
		<script src="{{ asset('/assets/js/custom.js') }}"></script>
        <script type="text/javascript">
            $('#timepicker').timepicker({
                minuteStep: 1,
                showSeconds: false,
                showMeridian: false,
                defaultTime: false
            });
        </script>
    	<script>
        	$(document).ready(function(){
        	$('[data-toggle="tooltip"]').tooltip(); 
        	});
    	</script>