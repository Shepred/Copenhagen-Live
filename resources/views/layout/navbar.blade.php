
		<!-- ============================================================= HEADER ============================================================= -->
		
		<header>
			<div class="navbar">
				        @if (session('vatsim_authed') == false)
				<div class="navbar-header">
					<div class="container">
								<ul class="pull-right marginbottom0">
                                    <div class="thumbs">
                                    <div class="thumb">
                                        <a href="{{ url('/login') }}">
                                            <figure>
                                                <figcaption class="text-overlay">
                                                    <div class="info">
                                                        <h5 class="white">VATSIM SSO</h5>
                                                    </div><!-- /.info -->
                                                </figcaption>
                                                <img src="{{ asset('assets/images/vatsim-logox40.png') }}">
                                            </figure>
                                        </a>
                                    </div><!-- /.thumb -->
                                   
                                </div><!-- /.col -->
						</ul><!-- /.social -->
						<ul class="info pull-right">
							<a href="{{ url('/login') }}">
								<li class="paddingright0">Log in using the VATSIM SSO</li>
							</a>
						</ul>						
					</div><!-- /.container -->
				</div><!-- /.navbar-header -->
        @endif

				<div class="yamm">
					<div class="navbar-collapse collapse">
						<div class="container">
							
							<!-- ============================================================= LOGO ============================================================= -->
							
							<a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/images/cphlive.jpg') }}" class="logo" alt=""></a>
							
							<!-- ============================================================= LOGO : END ============================================================= -->
							
							
							<!-- ============================================================= MAIN NAVIGATION ============================================================= -->
							
							<ul class="nav navbar-nav">
								
								<li>
									<a href="{{ url('/') }}">Home</a>
								</li>
								<li>
									<a href="{{ url('/briefing') }}">Briefing</a>
								</li>	
								<li>
									<a href="{{ url('/competitions') }}">Competitions</a>
								</li>
								<li>
									<a href="{{ url('/') }}#faq">Frequently Asked Questions</a>
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
							
							<!-- ============================================================= MAIN NAVIGATION : END ============================================================= -->
							
						</div><!-- /.container -->
					</div><!-- /.navbar-collapse -->
				</div><!-- /.yamm -->
			</div><!-- /.navbar -->
		</header>
		
		<!-- ============================================================= HEADER : END ============================================================= -->