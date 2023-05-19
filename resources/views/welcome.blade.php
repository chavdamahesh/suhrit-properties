<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html> <!--<![endif]-->
<head>
    <title>HSM</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/hsm-assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/hsm-assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/hsm-assets/plugins/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="/hsm-assets/plugins/prettyPhoto/css/prettyPhoto.css" rel="stylesheet">
    <link href="/hsm-assets/plugins/superfish/css/superfish.css" rel="stylesheet">
    <link href="/hsm-assets/plugins/isotope/jquery.isotope.css" rel="stylesheet">
    <link href="/hsm-assets/plugins/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/hsm-assets/plugins/royalslider/royalslider.css" rel="stylesheet">
    <link href="/hsm-assets/plugins/royalslider/skins/universal/rs-universal.css" rel="stylesheet">
    <link href="/hsm-assets/plugins/animate.css" rel="stylesheet">
    <link href="/hsm-assets/plugins/nice-select/css/nice-select.css" rel="stylesheet">
    <link href="/hsm-assets/css/theme.css" rel="stylesheet">
    <link href="/hsm-assets/css/theme-light.css" rel="stylesheet" id="css-switcher-link">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script><![endif]-->
</head>
<body>

<!-- // Top Navigation -->

<div class="top-navigation">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <ul class="list-inline top-left">
                    
                </ul>
                <ul class="list-inline top-right">                    
                    <li class="phone"><span><i class="fa fa-phone"></i>+32 496 20 22 63 / +32 485 271 082 </span></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-globe"></i>Current Language En <b
                                class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/eng">English</a></li>
                            <li><a href="/fra">French</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- // Main Navigation -->

<div class="header" style="text-align: right">
    <div class="container">
        <div class="logo">
            <a href="/"><img src="/img/logo-HSM.jpg" alt="HSM"/></a>
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
<!-- // Google Map -->

<div class="google-maps">
    <div class="gmap-search">
        <input type="text" placeholder="Type a Locality or Landmark"/> <a href="#"><i class="fa fa-search"></i></a>
    </div>
    <div id="map-canvas"></div>
</div>

<div class="container featured">
    
    <div class="featured-carousel">
        <div class="featured-control">
            <a href="#" class="featured-prev"><i class="fa fa-angle-left"></i></a>
            <a href="#" class="featured-next"><i class="fa fa-angle-right"></i></a>
        </div>
        <div class="sar-owl-carousel">
            <div class="sar-owl-carousel-wrapper">
                <div id="featured" class="owl-carousel">
                    <?php
                    //    $featured = $this->requestAction('/properties/featured');                                               
                    //    echo $this->element('/home/featured', array('featured'=>$featured)); 
                    ?>              
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container intro">    
    <div class="row">
        <div class="col-sm-4">
            <div class="content-title t-center">
                <h2 class="media-heading">We Listen</h2>
            </div>
            
        </div>
        <div class="col-sm-4">
            <div class="content-title t-center">
                <h2 class="media-heading">We understand</h2>
            </div>
            
        </div>
        <div class="col-sm-4">
            <div class="content-title t-center">
                <h2 class="media-heading">We deliver</h2>
            </div>
            
        </div>
    </div>
</div>


<!-- // Recent Properties -->

<div class="container projects" ng-controller="PropertyListCtrl">
   
    <div class="inline">
    <ul id="filtrable" class="filtrable nav nav-pills inline" data-filter-group="contract">
        <li class="all current office"><a href="#" data-filter="*">All</a></li>        
        <li class="sale"><a href="#" data-filter=".sale">Sale</a></li>
        <li class="rent"><a href="#" data-filter=".rent">Rent</a></li>
        <li>
    </ul>
    </div><div class="inline" data-filter-group="price">
     <ul id="filtrable" class="filtrable nav nav-pills" data-filter-group="price">  
     <li>
        <select class="filters-select" id="BudgetRent">
            <option>Rent price dropdown title</option>
            <option>All</option>
        </select>
     </li>
     <li>
        <select class="filters-select" id="BudgetSale">
            <option>Sale price dropdown title</option>
            <option>All</option>
        </select>
     </li></ul>
    </div><div class="inline">
    <ul id="filtrable" class="filtrable nav nav-pills inline">
     <li>
        <select class="filters-select" id="Location">
            <option>Location</option>
            <option>All</option>
        </select>
     </li>
     </ul>
     </div><div class="inline">
        <ul id="filtrable" class="filtrable nav nav-pills inline">
     <li>
        <select class="filters-select" id="Type">
            <option>Type</option>
            <option>All</option>
        </select>
     </li>
     <li>
        <button class="btn btn-primary" id="clear">Clear</button>
     </li>
</ul>
    </div>
    <div class="clear"></div>
    <section class="row items">    
        <article class="item col-sm-6 col-md-4">
            <div class="thumbnail">
                <a href="/p/1"><img src="/image/url.jpg" class="img-responsive" alt=""></a>

                <div class="caption">
                    <p class="price">€ 100</p>
                    <ul class="fa-ul">
                         <li>aaa</li>
                         <li>bbb</li>
                         <li>cc</li>
                    </ul>
                </div>
            </div>
        </article>    
        <article class="item col-sm-6 col-md-4">
            <div class="thumbnail">
                <a href="/p/1"><img src="/image/url.jpg" class="img-responsive" alt=""></a>

                <div class="caption">
                    <p class="price">€ 100</p>
                    <ul class="fa-ul">
                         <li>aaa</li>
                         <li>bbb</li>
                         <li>cc</li>
                    </ul>
                </div>
            </div>
        </article>
    </section>
</div>

<!-- // Our Features -->

<div class="container our-features">
    <div class="row">
        <div class="col-sm-12">
            <div class="content-title">
                <h2>About us11</h2><span class="before"></span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="media">
                <span class="media-icon animate-me pull-left">
                    <i class="fa fa-desktop"></i>
                </span>

                <div class="media-body">                    
                    <?php 
                        $block = $this->requestAction('/blocks/view/about_us');
                        echo '<h3 class="media-heading">'.$block['Block']['title'].'</h3>';
                        echo $this->Text->autoParagraph($block['Block']['content']); 
                    ?>
                </div>
            </div>
        </div> 
    </div>    
</div>
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
                    <h3 class="widget-title">Our Address</h3>
                    <ul class="fa-ul">
                        <li><i class="fa-li fa fa-location-arrow"></i>HSM Properties,<br/>
                            Rue Archimède 41 - 1000,<br/>
                            Bruxelles
                        </li>
                        <li><i class="fa-li fa fa-phone"></i>+32 485 271 082</li>
                        <li><i class="fa-li fa fa-phone"></i>+32 496 20 22 63 </li>
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
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="clear"></div>
                <div class="widget">
                    <h3 class="widget-title">Contact Us</h3>

                    <form name="contact" method="post" action="#contact" class="af-form row" id="af-form">

                        <div class="col-sm-4 af-outer af-required">
                            <div class="form-group af-inner">
                                <input type="text" name="name" id="name" size="30" value="" placeholder="Name *" class="form-control placeholder" />
                                <label class="error" for="name" id="name_error">Name is required.</label>
                            </div>
                        </div>

                        <div class="col-sm-4 af-outer af-required">
                            <div class="form-group af-inner">
                                <input type="text" name="email" id="email" size="30" value="" placeholder="Email *" class="form-control placeholder" />
                                <label class="error" for="email" id="email_error">Email is required.</label>
                            </div>
                        </div>

                        <div class="col-sm-4 af-outer af-required">
                            <div class="form-group af-inner">
                                <input type="text" name="email" id="subject" size="30" value="" placeholder="Subject" class="form-control placeholder" />
                                <label class="error" for="email" id="subject_error">Email is required.</label>
                            </div>
                        </div>

                        <div class="col-sm-12 af-outer af-required">
                            <div class="form-group af-inner">
                                <textarea name="message" id="input-message" cols="30" placeholder="Message *" class="form-control placeholder"></textarea>
                                <label class="error" for="input-message" id="message_error">Message is required.</label>
                            </div>
                        </div>

                        <div class="col-sm-12 af-outer af-required">
                            <div class="form-group af-inner">
                                <input type="submit" name="submit" class="form-button pull-right btn btn-success" id="submit_btn" value="Contact us" />
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="full-width footer-line">
    <div class="container">        
        <div class="col-sm-12">
            <p>
            Agents immobilier agréés - Belgique - IPI - 508.162 - 508.896
            | 
            Soumis au code de déontologie IPI: <a href="www.ipi.be" target="_blank">http://www.ipi.be</a>
            | 
            Instance de contrôle : IPI - rue du Luxembourg 16B 1000 Bruxelles
            </p>            
        </div>
        <div class="col-sm-12">
            <p class="copyright">&copy; Copyright HSM propoerties | All Rights Reserved </p>
        </div>
    </div>
</div>

<script src="/hsm-assets/js/jquery.js"></script>
<script src="/hsm-assets/js/jquery-migrate-1.2.1.js"></script>
<script src="/hsm-assets/plugins/jquery-ui.v1.10.4/jquery-ui.js"></script>
<script src="/hsm-assets/plugins/bootstrap/hsm-assets/js/bootstrap.min.js"></script>
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
<script src="/hsm-assets/js/gmap.js"></script>
<?php
   /*         
    $featured = $this->requestAction('/properties/featured');
    
    if($this->params['controller']=='properties' && $this->params['action']=='view'){
        $featured = array('0'=>array('Property'=>array('lat'=>$property['Property']['lat'],'lng'=>$property['Property']['lng']))) ;
    }
     
    $fSize = sizeof($featured) 
    */
?>

</body>
</html>