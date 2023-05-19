<html>
	<head>
		<title>{{ config('app.name') }} | @yield('title', 'Atladara Properties')</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		{{-- <link href="{{ asset('hsm-assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
		<link href="{{ asset('hsm-assets/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
		<link href="{{ asset('hsm-assets/plugins/bootstrap-select/css/bootstrap-select.min.css') }}" rel="stylesheet">
		<link href="{{ asset('hsm-assets/plugins/prettyPhoto/css/prettyPhoto.css') }}" rel="stylesheet">
		<link href="{{ asset('hsm-assets/plugins/superfish/css/superfish.css') }}" rel="stylesheet">
		<link href="{{ asset('hsm-assets/plugins/isotope/jquery.isotope.css') }}" rel="stylesheet">
		<link href="{{ asset('hsm-assets/plugins/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
		<link href="{{ asset('hsm-assets/plugins/owl-carousel/owl.theme.css') }}" rel="stylesheet">
		<link href="{{ asset('hsm-assets/plugins/royalslider/royalslider.css') }}" rel="stylesheet">
		<link href="{{ asset('hsm-assets/plugins/royalslider/skins/universal/rs-universal.css') }}" rel="stylesheet">
		<link href="{{ asset('hsm-assets/plugins/animate.css') }}" rel="stylesheet">
		<link href="{{ asset('hsm-assets/plugins/nice-select/css/nice-select.css') }}" rel="stylesheet">
		<link href="{{ asset('hsm-assets/css/theme.css') }}" rel="stylesheet">
		<link href="{{ asset('hsm-assets/css/theme-light.css') }}" rel="stylesheet" id="css-switcher-link">
		<link href="{{ asset('hsm-assets/css/overrides.css') }}" rel="stylesheet" id="css-switcher-link">
		@stack('css')
		<style>
			.nav-item {
				line-height: unset;
			}
		</style>
	</head>
	<body>
		<!-- // Top Navigation -->
		@if(isset($blocks))
			<nav class="navbar navbar-expand-md">
	            <div class="container">
	                <div class="navbar-brand" style="background: #34b7ff;">
	                	<a href="{{ route('index') }}" class="">
	                		<img src="{{ asset('hsm-assets/img/logo-Suhrit.png') }}" alt="Suhrit" style="width: auto; height: 108px;" />
	                	</a>
	            	</div>
	                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
	                    <span class="navbar-toggler-icon"></span>
	                </button>

	                <div class="collapse navbar-collapse" id="navbarSupportedContent">
	                    <!-- Left Side Of Navbar -->
	                    <ul class="navbar-nav me-auto">
	                    	<li class="nav-item">
								<a href="{{ route('home-2') }}" class="nav-link" data-toggle="">{{ $translations['home-2'] }}</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('about-us.show') }}" class="nav-link" title="{{ $translations['about_alt'] }}" data-toggle="">{{ $translations['about'] }}</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('how-it-works.show') }}" class="nav-link" data-toggle="">{{ $translations['how-it-works'] }}</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('services.show') }}" class="nav-link" title="{{ $translations['services_alt'] }}" data-toggle="">{{ $translations['services'] }}</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('rent.index') }}" class="nav-link" title="{{ $translations['rent_alt'] }}" data-toggle="">{{ $translations['rent'] }}</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('sale.index') }}" class="nav-link" title="{{ $translations['sale_alt'] }}" data-toggle="">{{ $translations['sale'] }}</a>
							</li>
							<li class="nav-item">
								<a href="{{ route('contact.show') }}" class="nav-link" data-toggle="">{{ $translations['contact-us'] }}</a>
							</li>
	                    </ul>

	                    <!-- Right Side Of Navbar -->
	                    <ul class="navbar-nav ms-auto">
	                        <!-- Authentication Links -->
	                        <li class="nav-item">
                                <a href="{{ route('personal-details.create') }}" class="nav-link rounded bg-primary text-white">{{ $translations['Post-Ads'] }}</a>
                            </li>

	                        @guest
	                            @if (Route::has('login'))
	                                <li class="nav-item">
	                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
	                                </li>
	                            @endif

	                            @if (Route::has('register'))
	                                <li class="nav-item">
	                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
	                                </li>
	                            @endif
	                        @else
	                            <li class="nav-item dropdown">
	                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
	                                    {{ Auth::user()->name }}
	                                </a>

	                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
	                                    <a class="dropdown-item" href="{{ route('logout') }}"
	                                       onclick="event.preventDefault();
	                                                     document.getElementById('logout-form').submit();">
	                                        {{ __('Logout') }}
	                                    </a>

	                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
	                                        @csrf
	                                    </form>
	                                </div>
	                            </li>
	                        @endguest
	                    </ul>
	                </div>
	            </div>
	        </nav>

			{{-- <nav>
				<input type="checkbox" id="check">
				<label for="check" class="togglebtn">
					<i class="fa fa-bars"></i>
				</label>
				<label class="logo">NavBar</label>
				<ul>
					<li>
						<a href="{{ route('home-2') }}" class="nav-link" data-toggle="">{{ $translations['home-2'] }}</a>
					</li>
					<li>
						<a href="{{ route('about-us.show') }}" class="nav-link" title="{{ $translations['about_alt'] }}" data-toggle="">{{ $translations['about'] }}</a>
					</li>
					<li>
						<a href="{{ route('how-it-works.show') }}" class="nav-link" data-toggle="">{{ $translations['how-it-works'] }}</a>
					</li>
					<li>
						<a href="{{ route('services.show') }}" class="nav-link" title="{{ $translations['services_alt'] }}" data-toggle="">{{ $translations['services'] }}</a>
					</li>
					<li>
						<a href="{{ route('rent.index') }}" class="nav-link" title="{{ $translations['rent_alt'] }}" data-toggle="">{{ $translations['rent'] }}</a>
					</li>
					<li>
						<a href="{{ route('sale.index') }}" class="nav-link" title="{{ $translations['sale_alt'] }}" data-toggle="">{{ $translations['sale'] }}</a>
					</li>
					<li>
						<a href="{{ route('contact.show') }}" class="nav-link" data-toggle="">{{ $translations['contact-us'] }}</a>
					</li>
					<li>
						<a href="{{ route('personal-details.create') }}" class="btn my-2 my-sm-0" type="submit">{{ $translations['Post-Ads'] }}</a>
					</li>
				</ul>
			</nav> --}}
		@endif
		<!-- // Main Navigation -->
		{{-- <div class="header" style="text-align: right">
			<div class="container">
				<div class="logo">
					<a href="{{ route('index') }}"><img src="{{ asset('hsm-assets/img/logo-Suhrit.png') }}" alt="Suhrit"/></a>
				</div>
			</div>
		</div> --}}

		{{-- Start::Content Area --}}
		<div class="container">
			@yield('content')
		</div>
		{{-- End::Content Area --}}

		{{-- Start::Footer --}}
		<div id="footer" class="full-width footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-6">
						<div class="widget">
							<h3 class="widget-title">{{ $translations['our-address'] }}</h3>
							<ul class="fa-ul">
								<li><i class="fa-li fa fa-location-arrow"></i>
									{{ $translations['sf-01-sunrise-near-osia-mall-sunpharma-road-390012-vadodara'] }}
								</li>
								<li><i class="fa-li fa fa-phone"></i>{{ $translations['91-7698889906'] }}</li>
								<li><i class="fa-li fa fa-envelope"></i>{{ $translations['info-at-suhritcom'] }}</li>
							</ul>
						</div>
						<a name="contact"></a>
					</div>
				</div>
			</div>
			<div class="full-width footer-line">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p class="copyright">&copy; {{ __('Copyright '.date('Y').' Suhrit Properties | All Rights Reserved') }}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		{{-- End::Footer --}}

		<script src="{{ asset('hsm-assets/js/jquery.js') }}"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
		<script src="{{ asset('hsm-assets/js/jquery-migrate-1.2.1.js') }}"></script>
		<script src="{{ asset('hsm-assets/plugins/jquery-ui.v1.10.4/jquery-ui.js') }}"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		{{-- <script src="{{ asset('hsm-assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script> --}}
		<script src="{{ asset('hsm-assets/js/modernizr.custom.js') }}"></script>
		<script src="{{ asset('hsm-assets/plugins/prettyPhoto/js/jquery.prettyPhoto.js') }}"></script>
		<script src="{{ asset('hsm-assets/plugins/superfish/js/superfish.js') }}"></script>
		<script src="{{ asset('hsm-assets/plugins/isotope/jquery.isotope.min.js') }}"></script>
		<script src="{{ asset('hsm-assets/plugins/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
		<script src="{{ asset('hsm-assets/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('hsm-assets/plugins/jquery.cookie.js') }}"></script>
		<script src="{{ asset('hsm-assets/plugins/royalslider/jquery.royalslider.min.js') }}"></script>
		<script src="{{ asset('hsm-assets/plugins/nice-select/js/jquery.nice-select.min.js') }}"></script>
		<script src="{{ asset('hsm-assets/plugins/ajax-mail.js') }}" type="text/javascript" ></script>
		<script src="{{ asset('hsm-assets/js/main.js') }}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key={{ config('services.google_map_api_key') }}"></script>
		<script type="text/javascript">
			var script = '<script type="text/javascript" src="/hsm-assets/js/gmap-infobubble';
			if (document.location.search.indexOf('compiled') !== -1) {
				script += '-compiled';
			}
			script += '.js"><' + '/script>';
			document.write(script);
		</script>
		<script>
			var markerLatLng = [
		<?php
		$fSize = 0;
		if(isset($featured)):
			$fSize = sizeof($featured);
			foreach($featured as $key => $f):
				if(!empty($f['lat'])){
		?>
		new google.maps.LatLng(<?php echo $f['lat'].','.$f['lng'] ?>)<?php echo ($key+1) != $fSize ? ',':''; ?><?php }
		endforeach;
		endif;
		if(isset($property) && $property->lat):
		?>,
		new google.maps.LatLng(<?php echo $property->lat.','.$property->lng ?>)<?php
		endif;
		?>
		];
		</script>
		<script src="{{ asset('hsm-assets/js/gmap.js') }}"></script>
		<script>
			function openNav() {
				document.getElementById("navbarSupportedContent").style.width = "250px";
				document.getElementById("main").style.marginLeft = "250px";
			}
			function closeNav() {
				document.getElementById("navbarSupportedContent").style.width = "0";
				document.getElementById("main").style.marginLeft= "0";
			}
		</script>
	</body>
</html>