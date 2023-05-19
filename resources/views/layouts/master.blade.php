<!--[if IE 8 ]><html class="ie ie8"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html> <!--<![endif]-->
<head>
    <title>SUHRIT PROPERTIES-ATLADARA VADODARA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="/hsm-assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/hsm-assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/hsm-assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/hsm-assets/plugins/prettyPhoto/css/prettyPhoto.css" rel="stylesheet">
    <link href="/hsm-assets/plugins/superfish/css/superfish.css" rel="stylesheet">
    <link href="/hsm-assets/plugins/isotope/jquery.isotope.css" rel="stylesheet">
    <link href="/hsm-assets/plugins/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/hsm-assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet">
    <link href="/hsm-assets/plugins/royalslider/royalslider.css" rel="stylesheet">
    <link href="/hsm-assets/plugins/royalslider/skins/universal/rs-universal.css" rel="stylesheet">
    <link href="/hsm-assets/plugins/animate.css" rel="stylesheet">
    <link href="/hsm-assets/plugins/nice-select/css/nice-select.css" rel="stylesheet">
    <link href="/hsm-assets/css/theme.css" rel="stylesheet">
    <link href="/hsm-assets/css/theme-light.css" rel="stylesheet" id="css-switcher-link">
    <link href="/hsm-assets/css/overrides.css" rel="stylesheet" id="css-switcher-link">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
    @stack('css')
    
</head>
<body>

<!-- // Top Navigation -->
<?php if(isset($blocks)):?>
    <nav>
       <input type="checkbox" id="check">
       <label for="check" class="togglebtn">
           <i class="fa fa-bars"></i>
       </label>
       <label class="logo">NavBar</label>
       <ul>
            <li>
                <a href="/home-2" class="nav-link" data-toggle="">{{ $translations['home-2'] }}</a>
            </li>
            <li>
                <a href="/about-us" class="nav-link" title="{{ $translations['about_alt'] }}" data-toggle="">{{ $translations['about'] }}</a>
            </li>
            <li>
                <a href="/how-it-works" class="nav-link" data-toggle="">{{ $translations['how-it-works'] }}</a>
            </li>
            <li>
                <a href="/services" class="nav-link" title="{{ $translations['services_alt'] }}" data-toggle="">{{ $translations['services'] }}</a>
            </li>
            <li>
                <a href="/rent" class="nav-link" title="{{ $translations['rent_alt'] }}" data-toggle="">{{ $translations['rent'] }}</a>
            </li>
            <li>
                <a href="/sale" class="nav-link" title="{{ $translations['sale_alt'] }}" data-toggle="">{{ $translations['sale'] }}</a>
            </li>
            <li> 
                <a href="/contact" class="nav-link" data-toggle="">{{ $translations['contact-us'] }}</a>
            </li>
            <li>
                <a href="/personal-details" class="btn my-2 my-sm-0" type="submit">{{ $translations['Post-Ads'] }}</a>
            </li>

       </ul>
   </nav>
{{-- <div class="top-navigation">
    <div class="container">
        <div class="row">
            <div id="main">
                <span class="hamburger" onclick="openNav()">&#9776; </span>
            </div>
            <div class="collapse navbar-collapse sidenav" id="navbarSupportedContent">
                <a href="javascript:void(0)" class="closebtn d-m-block" onclick="closeNav()">&times;</a>

                <ul class="list-inline  navbar-nav ">
                    <li class="dropdown nav-item">
                        <a href="/home-2" class="nav-link" data-toggle="">{{ $translations['home-2'] }}</a>
                    </li>

                    <li class="dropdown nav-item">
                        <a href="/about-us" class="nav-link" title="{{ $translations['about_alt'] }}" data-toggle="">{{ $translations['about'] }}</a>
                    </li>

                     <li class="dropdown nav-item">
                        <a href="/how-it-works" class="nav-link" data-toggle="">{{ $translations['how-it-works'] }}</a>
                    </li> --}}
                    
                   {{--  <li class="dropdown nav-item">
                        <a href="/services" class="nav-link" title="{{ $translations['services_alt'] }}" data-toggle="">{{ $translations['services'] }}</a>
                    </li> --}}
                {{--     <li class="dropdown nav-item">
                        <a href="/rent" class="nav-link" title="{{ $translations['rent_alt'] }}" data-toggle="">{{ $translations['rent'] }}</a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="/sale" class="nav-link" title="{{ $translations['sale_alt'] }}" data-toggle="">{{ $translations['sale'] }}</a>
                    </li>
                    <li class="dropdown nav-item">
                        <a href="/contact" class="nav-link" data-toggle="">{{ $translations['contact-us'] }}

                        </a>
                    </li> --}}

                    {{-- <li class="dropdown nav-item">
                        <a href="/personal-details" class="nav-link" data-toggle="">{{ $translations['register'] }}</a>
                    </li> --}}
                    <!--<li class="phone"><span><i class="fa fa-phone"></i>+32 496 20 22 63 / +32 485 271 082 </span></li>-->
               {{--      <li class="dropdown nav-item d-none d-m-block">
                        <a href="https://www.facebook.com/hsmproperty/" target="_blank">
                          <img class="t-white" src="/hsm-assets/img/facebook.svg">
                        </a>
                    </li>
                    <li class="dropdown nav-item d-none d-m-block">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i><?php echo $sitelocale ?> <b
                              class="caret"></b></a>
                        <ul class="dropdown-menu" style="background-color: #fff;">
                            <li><a href="/locale/en"><?php echo __('English')?></a></li>
                            <li><a href="/locale/fr"><?php echo __('French')?></a></li>
                        </ul> --}}
                    {{-- </li> --}}
                    {{-- <li class="dropdown nav-item">
                        <a href="/personal-details" class="btn my-2 my-sm-0" type="submit">{{ $translations['Post-Ads'] }}</a> 
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div> --}}
<?php endif;?>
<!-- // Main Navigation -->

<div class="header" style="text-align: right">
    <div class="container">
        <div class="logo">
            <a href="/"><img src="/hsm-assets/img/logo-Suhrit.png" alt="HSM"/></a>
        </div>
        <div id="res-menu"></div>
        <div class="rent-buy">
            <ul>
                <li><a href="#" class="active">Nav</a></li>
                <li><a href="#">Nav</a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Content Area -->
    @yield('content')
<!-- Content Area -->

<!-- Footer -->

<div id="footer" class="full-width footer">
    <div class="container">
        <div class="row">
            <!--<div class="col-sm-6 col-sm-6 col-md-2">
                <div class="widget">
                    <h3 class="widget-title">Navigation</h3>
                    <ul class="row">
                        <li class="col-xs-6 col-md-12"><a href="#">Home</a></li>
                        <li class="col-xs-6 col-md-12"><a href="#">Listings</a></li>
                        <li class="col-xs-6 col-md-12"><a href="#">Office</a></li>
                        <li class="col-xs-6 col-md-12"><a href="#">Buy</a></li>
                        <li class="col-xs-6 col-md-12"><a href="#">About Us</a></li>
                        <li class="col-xs-6 col-md-12"><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>-->
            <div class="col-sm-12 col-md-6">
                <div class="widget">
                    <h3 class="widget-title">{{ $translations['our-address'] }}</h3>
                    <ul class="fa-ul">
                        <li><i class="fa-li fa fa-location-arrow"></i>
                        {{ $translations['sf-01-sunrise-near-osia-mall-sunpharma-road-390012-vadodara'] }}
                        </li>
                        <li><i class="fa-li fa fa-phone"></i>{{ $translations['91-7698889906'] }}</li>
                        <li><i class="fa-li fa fa-envelope"></i>{{ $translations['info-at-suhritcom'] }}</li>
                        {{-- <li><i class="fa-li fa fa-phone"></i>+32 496 20 22 63 </li> --}}
                    </ul>
                </div>
                <!--
                <div class="widget">
                    <ul class="socical-line list-inline">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    </ul>
                </div>
                -->
                <a name="contact"></a>
            </div>
         {{--    <div class="col-sm-12 col-md-6">

                <div class="clear"></div>
                <div class="widget">
                    <h3 class="widget-title">{{ $translations['contact-us'] }}</h3>

                    <form name="contact" method="post" action="" class="af-form row" id="af-form">
                        @csrf
                        <div class="col-sm-4 af-outer af-required">
                            <div class="form-group af-inner">
                                <input type="text" name="name" id="name" size="30" value="" placeholder="{{ $translations['name'] }}" class="form-control placeholder" />
                                <label class="error" for="name" id="name_error"><?php echo __('Name is required') ?>.</label>
                            </div>
                        </div>

                        <div class="col-sm-4 af-outer af-required">
                            <div class="form-group af-inner">
                                <input type="text" name="email" id="email" size="30" value="" placeholder="{{ $translations['email'] }} *" class="form-control placeholder" />
                                <label class="error" for="email" id="email_error"><?php echo __('Email is required') ?>.</label>
                            </div>
                        </div>

                        <div class="col-sm-4 af-outer af-required">
                            <div class="form-group af-inner">
                                <input type="text" name="subject" id="subject" size="30" value="" placeholder="{{ $translations['subject'] }}" class="form-control placeholder" />
                                <label class="error" for="subject" id="subject_error"><?php echo __('Subject is required') ?>.</label>
                            </div>
                        </div>

                        <div class="col-sm-12 af-outer af-required">
                            <div class="form-group af-inner">
                                <textarea name="content" id="input-message" cols="30" placeholder="{{ $translations['message'] }} *" class="form-control placeholder"></textarea>
                                <label class="error" for="input-message" id="message_error"><?php echo __('Message is required') ?>.</label>
                            </div>
                        </div>

                        <div class="col-sm-12 af-outer af-required">
                            <div class="form-group af-inner">
                                <input type="submit" name="submit" class="form-button pull-right btn btn-success" id="submit_btn" value="{{ $translations['contact'] }}" />
                            </div>
                        </div>
                    </form>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<div class="full-width footer-line">
    <div class="container">
    {{--     <div class="col-sm-12">
            <p>
            Agents immobilier agréés - Belgique - IPI - 508.162 - 508.896
            |
            Soumis au code de déontologie IPI: <a href="www.ipi.be" target="_blank">http://www.ipi.be</a>
            |
            Instance de contrôle : IPI - rue du Luxembourg 16B 1000 Bruxelles
            |
            Num d'entreprises BE0443146478 - BE 0849285478
            |
            Assurance AXA Belgium Police N°730.390.160
            </p>
        </div> --}}
        <div class="col-sm-12">
            <p class="copyright">&copy; <?php echo __('Copyright '.date('Y').' Suhrit Properties | All Rights Reserved') ?> </p>
        </div>
    </div>
</div>

<script src="/hsm-assets/js/jquery.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="/hsm-assets/js/jquery-migrate-1.2.1.js"></script>
<script src="/hsm-assets/plugins/jquery-ui.v1.10.4/jquery-ui.js"></script>
<script src="/hsm-assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/hsm-assets/js/modernizr.custom.js"></script>
<script src="/hsm-assets/plugins/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<script src="/hsm-assets/plugins/superfish/js/superfish.js"></script>
<script src="/hsm-assets/plugins/isotope/jquery.isotope.min.js"></script>
<script src="/hsm-assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="/hsm-assets/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
<script src="/hsm-assets/plugins/jquery.cookie.js"></script>
<script src="/hsm-assets/plugins/royalslider/jquery.royalslider.min.js"></script>
<script src="/hsm-assets/plugins/nice-select/js/jquery.nice-select.min.js"></script>
<script src="/hsm-assets/plugins/ajax-mail.js" type="text/javascript" ></script>
<script src="/hsm-assets/js/main.js"></script>
<!--[if (gte IE 9)|!(IE)]><!-->
<!--<script src="/hsm-assets/plugins/style-switcher/style.switcher.js"></script>-->
<!--<![endif]-->

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;key=AIzaSyBw2hGYE25AKiiCS8lU_84HOJlEdJ-6PBM"></script>
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
<script src="/hsm-assets/js/gmap.js"></script>
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