// -------------------------------------------------------------------------------------------
// empty links return false

$(document).ready(function(){
    $('a[href=#]').click(function (event) {
        event.preventDefault();
    });
    // fix html5 placeholder attribute for ie7 & ie8
    if ($.browser.msie && $.browser.version.substr(0, 1) < 9) { // ie7&ie8
        $('input[placeholder], textarea[placeholder]').each(function () {
            var input = $(this);

            $(input).val(input.attr('placeholder'));

            $(input).focus(function () {
                if (input.val() == input.attr('placeholder')) {
                    input.val('');
                }
            });

            $(input).blur(function () {
                if (input.val() == '' || input.val() == input.attr('placeholder')) {
                    input.val(input.attr('placeholder'));
                }
            });
        });
    }
});

// -------------------------------------------------------------------------------------------
// init default skin
/*
$(document).ready(function() {
    if(!$(".style-switcher").length) {
        var skin = 'light'; // light or dark

        $('#css-switcher-link').attr('href', 'assets/css/theme-' + skin + '.css');
        $('#partners img, div.logo img').each(function () {
            arr = $(this).attr('src').split('/');
            $(this).attr('src', 'assets/img/' + skin + '/' + arr[arr.length - 1]);
        });
    }
});
*/
// -------------------------------------------------------------------------------------------
// superfish menu

$(document).ready(function() {
    $('ul.sf-menu').superfish();
    // -------------------------------------------------------------------------------------------
    // create mobile menu from exist superfish menu

    $(document).ready(function () {
        var $menu = $('.site-navigation > ul'),
            optionsList = '<option value="" selected> - - Main Navigation - - </option>';

        $menu.find('li').each(function () {
            var $this = $(this),
                $anchor = $this.children('a'),
                depth = $this.parents('ul').length - 1,
                indent = '';

            if (depth) {
                while (depth > 0) {
                    indent += ' ::: ';
                    depth--;
                }
            }

            optionsList += '<option value="' + $anchor.attr('href') + '">' + indent + ' ' + $anchor.text() + '</option>';
        }).end().parent().parent().find('#res-menu').append('<select class="res-menu">' + optionsList + '</select><div class="res-menu-title">Navigation <i class="fa fa-angle-down"></i></div>');

        $('.res-menu').on('change', function () {
            window.location = $(this).val();
        });

    });
});

// prettyPhoto
$(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto({theme:'dark_square'});
});

// sign in/up form
$(document).ready(function(){
    $('.signin-link, .signin-form button').click(function(){
        $('.signin-form').fadeToggle();
        if($('.signup-form').is(":visible")) {
            $('.signup-form').fadeToggle();
        }
    });
    $('.signup-link, .signup-form button').click(function(){
        $('.signup-form').fadeToggle();
        if($('.signin-form').is(":visible")) {
            $('.signin-form').fadeToggle();
        }
    });

    $('#signin-form .btn-close').click(function (e) {
        $('.signin-form').fadeOut();
        e.preventDefault();
    });
    $('#signup-form .btn-close').click(function (e) {
        $('.signup-form').fadeOut();
        e.preventDefault();
    });

});

// make google map search draggable
$(document).ready(function(){
    if($(".gmap-search").length){
        $(".gmap-search").draggable();
    }
});

// -------------------------------------------------------------------------------------------
// Rent/Buy switcher

$(document).ready(function(){
    $('.rent-buy a').click(function(){
        $('.rent-buy a').removeClass('active');
        $(this).addClass('active');
    });
});

// -------------------------------------------------------------------------------------------
// add hover class

var hover = $('.thumbnail');
hover.hover(
    function () {
        $(this).addClass('hover')
        var lat = $(this).data('lat');
        var lng = $(this).data('lng');
        showMarker(lat, lng);
    },
    function () {
        $(this).removeClass('hover')
    }
)

// -------------------------------------------------------------------------------------------
// Selectbox

$(window).on('load', function () {
    $('select').niceSelect();
});

// -------------------------------------------------------------------------------------------
// Isotope

$(window).resize(function () {
    // relayout on window resize
    $('.projects .items').isotope('reLayout');
});

$(window).load(function () {
    // cache container
    var $container = $('.projects .items');
    // initialize isotope
    $container.isotope({
        // options...
        itemSelector: '.item'
    });
    // filter items when filter link is clicked
    $('#filtrable a').click(function () {
        var selector = $(this).attr('data-filter');
        $("#filtrable li").removeClass("current");
        $(this).parent().addClass("current");

        if($(this).parent().hasClass("rent")){
            $("#BudgetRent").parent().show();
            $("#BudgetSale").parent().hide();
        }else if($(this).parent().hasClass("sale")){
            $("#BudgetRent").parent().hide();
            $("#BudgetSale").parent().show();
        }else if($(this).parent().hasClass("all")){
            $("#BudgetRent").parent().show();
            $("#BudgetSale").parent().show();
        }

        $container.isotope({ filter: selector });
        return false;
    });
    $container.isotope('reLayout');

    // filter functions
    var filterFns = {
      // show if number is greater than 50
      numberGreaterThan50: function() {
        var number = $(this).find('.number').text();
        return parseInt( number, 10 ) > 50;
      },
      // show if name ends with -ium
      ium: function() {
        var name = $(this).find('.name').text();
        return name.match( /ium$/ );
      }
    };

    // bind filter on checkbox change
    $('.filters-checkbox').on('change', function() {
        $('article.item').css('display', 'none');
        $('.filters-checkbox').each(function(val, key){
            if($(this).prop('checked') !== false){
                if($(this).attr('id') == 'Type'){
                    $('article.'+$(this).val()).css('display', 'block');
                    
                }else if($(this).attr('id') == 'Location'){
                    $('article.location'+$(this).val()).css('display', 'block');
                }else if($(this).attr('id') == 'BudgetRent'){
                    $('article.'+$(this).val()).css('display', 'block');
                    
                    if($(this).val() == 's300'){
                        $('article.r1000').css('display', 'block');    
                        $('article.r1000-2000').css('display', 'block');    
                        $('article.r2000').css('display', 'block');    
                    }
                }
            }
        });
        if($('.filters-checkbox:checked').length === 0){
            $('article.item').css('display', 'block');
        }

    });

    $('.filters-checkboxOld').on('change', function() {
  
      // get filter value from option value
        if(this.value != ''){
            if($(this).attr('id') == 'Location'){
                var filterValue = '.location' + this.value;
                $(filterValue).toggle(this.checked);
                var n = $(this.checked).length;
                console.log(n);
                if($(this.checked).length == 0){
                    return $(this).attr('src').get();
                }
            }else if($(this).attr('id') == 'Type'){
                var filterValue = '.' + this.value;
                $(filterValue).toggle(this.checked);
            }else{
                var filterValue = this.value;
                $(filterValue).toggle(this.checked);
            }
                $container.isotope({ filter: filterValue });
        }else{
                filterValue = '';
                $container.isotope({ filter: filterValue });
        }
    });


    // $(document).ready(function() {
    //     $(document).on('click','.filters-checkbox'){
    //         var arr = [];
    //         var counter = 0;
    //         $('.filters-checkbox').each(function(){
    //             if($(this).is(":checked")){
    //                 arr.push($(this).attr('id') == 'Type');
    //                 counter++;
    //             }
    //         }

    //     }
    // });


    $("#clear").on( 'click', function() {
        $('input.filters-checkbox').each(function(e) {
            console.log($(this).val());
            $(this).val('');
            $(this).trigger('change');
        });

        $('div.filters-checkbox').each(function(e) {
            $("span.current", $(this)).html($(".list li:first", $(this)).html());
        });
        $(".all a").click();
    });

    /*

    This should make filters carry across

    // init Isotope
	var $grid = $('.grid').isotope({
	  itemSelector: '.color-shape'
	});

	// store filter for each group
	var filters = {};

	$('.filters').on( 'click', '.button', function() {
	  var $this = $(this);
	  // get group key
	  var $buttonGroup = $this.parents('.button-group');
	  var filterGroup = $buttonGroup.attr('data-filter-group');
	  // set filter for group
	  filters[ filterGroup ] = $this.attr('data-filter');
	  // combine filters
	  var filterValue = concatValues( filters );
	  // set filter for Isotope
	  $grid.isotope({ filter: filterValue });
	});

	// change is-checked class on buttons
	$('.button-group').each( function( i, buttonGroup ) {
	  var $buttonGroup = $( buttonGroup );
	  $buttonGroup.on( 'click', 'button', function() {
	    $buttonGroup.find('.is-checked').removeClass('is-checked');
	    $( this ).addClass('is-checked');
	  });
	});

	// flatten object by concatting values
	function concatValues( obj ) {
	  var value = '';
	  for ( var prop in obj ) {
	    value += obj[ prop ];
	  }
	  return value;
	}

    */

});

$(window).resize(function () {
    // relayout on window resize
    $('.gallery .items').isotope('reLayout');
});

$(window).load(function () {
    // cache container
    var $container = $('.gallery .items');
    // initialize isotope
    $container.isotope({
        // options...
        itemSelector: '.item'
    });
    // filter items when filter link is clicked
    $('#filtrable a').click(function () {
        var selector = $(this).attr('data-filter');
        $("#filtrable li").removeClass("current");
        $(this).parent().addClass("current");
        $container.isotope({ filter: selector });
        return false;
    });
});


// -------------------------------------------------------------------------------------------
// royalSlider

$(window).load(function() {
    if ($.fn.royalSlider) {
        $(".royalSlider").royalSlider({
            fullscreen: {
                enabled: false,
                nativeFS: true
            },
            //autoScaleSlider:false,
            autoScaleSliderWidth:'800',
            imageScaleMode: 'none',
            imageScalePadding: 0,
            controlNavigation: 'thumbnails',
            autoScaleSlider: true,
            thumbs: {
                orientation: 'horizontal',
                spacing: 10,
                paddingBottom: 0,
                appendSpan: true,
               // arrowLeft:$('.rsThumbsArrowLeft'),
                // arrowRight:$('.rsThumbsArrowRight'),
                fitInViewport:false
            },
            transitionType:'fade',

            loop: true,
            arrowsNav: false,
            keyboardNavEnabled: true
        });
    }
});

// -------------------------------------------------------------------------------------------
// Owl Carousel

$(document).ready(function () {
    var owlFeatured = $(".owl-carousel");
    var windowsize = $(window).width();
    

    if (windowsize > 440) {
        owlFeatured.on('changed.owl.carousel', function (e) {
            if($('.owl-item.active')[2] !== undefined){
                $('.owl-item.active').removeClass('p-active');
                $($('.owl-item.active')[2]).addClass('p-active');

                var lat = $('div', $('.owl-item.active')[2]).attr('data-lat');
                var lng = $('div', $('.owl-item.active')[2]).attr('data-lng');
                showMarker(lat, lng);
            }
        });
        $(".owl-carousel").owlCarousel({
            // items:5,
            // stagePadding: 0,
            loop: false,
            rewind: true,
            // margin: 10,
            // itemsDesktop: false,
            // itemsDesktopSmall: [991, 2],
            // itemsTablet: false,
            // itemsMobile: [479, 1],
            autoplay: true,
            responsiveClass: true,
            autoplayTimeout: 5000,
            autoHeight: true,
            autoplayHoverPause:true,
            navigation : true,
            responsive: {
                0: {
                  items: 1
                },

                600: {
                  items: 3
                },

                1000: {
                  items: 5
                }
            }
            // pagination: false
        });
    }else{
        owlFeatured.on('changed.owl.carousel', function (e) {
            if($('.owl-item.active') !== undefined){
                $('.owl-item.active').removeClass('p-active');
                $('.owl-item.active').addClass('p-active');
                var lat = $('div', $('.owl-item.active')).attr('data-lat');
                var lng = $('div', $('.owl-item.active')).attr('data-lng');
                if(lat !== undefined){
                    showMarker(lat, lng);
                }
            }
        });
        $(".owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            // itemsDesktop: false,
            // itemsDesktopSmall: [991, 2],
            // /itemsTablet: false,
            // itemsMobile: [479, 1],
            autoplay: true,
            autoplayTimeout: 5000,
            // pagination: false
        });
    }

    $(".featured-next").click(function () {
        $("#featured").trigger('next.owl.carousel');
    });
    $(".featured-prev").click(function () {
        $("#featured").trigger('prev.owl.carousel');
    });
    $("#testimonials").owlCarousel({
        items: 2,
        itemsDesktop: false,
        itemsDesktopSmall: [991, 2],
        itemsTablet: [768, 1],
        itemsMobile: [479, 1],
        autoplay: true,
        pagination: false
    });
    $(".testimonials-next").click(function () {
        $("#testimonials").trigger('next.owl.carousel');
        return false;
    });
    $(".testimonials-prev").click(function () {
        $("#testimonials").trigger('prev.owl.carousel');
        return false;
    });
    $("#partners").owlCarousel({
        items: 6,
        itemsDesktop: false,
        itemsDesktopSmall: [991, 5],
        itemsTablet: [768, 3],
        itemsMobile: [479, 2],
        autoplay: true,
        pagination: false
    });
    $(".partners-next").click(function () {
        $("#partners").trigger('next.owl.carousel');
        return false;
    });
    $(".partners-prev").click(function () {
        $("#partners").trigger('prev.owl.carousel');
        return false;
    });
    $("#last-tweets").owlCarousel({singleItem: true, autoPlay: true, pagination: false });

    // Blog
    if ($('.img-carousel').length !== 0) {
        $(".img-carousel").owlCarousel({
            navigation : true, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true
        });
        $(".img-carousel .next").click(function () {
            $(".img-carousel").trigger('next.owl.carousel');
            return false;
        });
        $(".img-carousel .prev").click(function () {
            $(".img-carousel").trigger('prev.owl.carousel');
            return false;
        });
    }

});

// -------------------------------------------------------------------------------------------
// Animation

var i = 0;
var anim_offset = 50;
var w_height = $(window).height();

function do_block_animation() {

    var sections = $('.animate-me');

    $(window).scroll(function () {
        sections.each(function () {
            var section = $(this);
            if (!section.hasClass('animate-off') && (w_height + $(window).scrollTop() - section.offset().top - anim_offset > 0)) {
                section.addClass('animate-off').trigger('start_animation');
                i++;
            }
        });
    });

    sections.bind('start_animation', function () {
        var section = $(this);
        if (i & 1) {
            section.addClass('animated bounceInRight');
        }
        else {
            section.addClass('animated bounceInLeft');
        }
        //section.one('webkitAnimationEnd mozAnimationEnd oAnimationEnd animationEnd', $(this).css({'opacity': 1}));
    });

    $(window).resize(function () {
        w_height = $(window).height();
    });
}

function is_block_visible() {

    var sections = $('' +
        // blog
        '.btn, socical-line a' +
        '.full-width > .container div' +
        //'.row' +
        //'.row > div' +
        //', body > .container' +
        //', body > .container > div' +
        //', body > .full-width > .container > div' +
        //
        '');
    //var sections = $('div.row > div');

    sections.each(function () {
        var section = $(this);
        if (!section.hasClass('animate-off') && (w_height + $(window).scrollTop() - section.offset().top - anim_offset > 0)) {
            section.addClass('animate-off');
        } else {
            //section.css({'opacity': 0});
            section.addClass('animate-me');
        }
    });
}

$(document).ready(function () {
    is_block_visible();
    do_block_animation();
});
