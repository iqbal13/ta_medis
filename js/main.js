jQuery(function ($) {
    "use strict";
	
	/*	Table OF Contents
	==========================
	1-Navigation
	2-Accordain
	3-TABS
	4-Tweets
	5-Flexslider
	6-Carouselfredsel Slider
	7-Portfolio
	8-Contact
	
	*/
	
	 /*==================================
		1-Navigation
	====================================*/
	/*mobilemenu*/
    $('ul.menu').mobileMenu({
        defaultText: 'GoTo',
        className: 'mobile-menu',
        subMenuDash: '&ndash;'
    });
	$('.scrollto').click(function () {
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 1000);
        return false;
    });
	
	
	$('ul.nav li.dropdown').click(
        function () {

            var state = $(this).data('toggleState');
            if (state) {
                $(this).children('ul.dropdown-menu').slideUp();
            } else {
                $(this).children('ul.dropdown-menu').slideDown();
            }
            $(this).data('toggleState', !state);
        });
	
	
	 /*==================================
		2-Accordain
	====================================*/
    $("#accordion").collapse();
    $('.panel-title > a').click(function () {
        $('.active .accordain-icon').addClass('icon-plus', 200).removeClass('icon-minus', 200);
        $('.panel-title > a').removeClass('active');
        $(this).addClass('active');
        $('.active .accordain-icon').removeClass('icon-plus', 200).addClass('icon-minus', 200);
    });
	
	 /*==================================
		3-TABS
	====================================*/
	$('.nav-tabs a').click(function (e) {
	  e.preventDefault()
	  $(this).tab('show')
	});
	
	
	
	
	/*================================
	5-Flexslider
	================================*/
	
	
	
	/*================================
	6-Carouselfredsel Slider
	================================*/
	
	

	
	
	/*================================
	8-Contact
	================================*/	
	if($('#contact-map').length)
	{
	 	var contact_map = 'contact-map',
        mapAddress = $('#contact-map').data('address'),
        mapType = $('#contact-map').data('maptype'),
        zoomLvl = $('#contact-map').data('zoomlvl');
		xv_contactemaps(contact_map, mapAddress, mapType, zoomLvl);
	}
	
    function xv_contactemaps(selector, address, type, zoom_lvl) {
        var map = new google.maps.Map(document.getElementById(selector), {
            mapTypeId: google.maps.MapTypeId.type,
            scrollwheel: false,
            draggable: false,
            zoom: zoom_lvl
        });
       
        var geocoder = new google.maps.Geocoder();
        geocoder.geocode({
                'address': address
            },
            function (results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    new google.maps.Marker({
                        position: results[0].geometry.location,
                        map: map,
                    });
                    map.setCenter(results[0].geometry.location);
                }
            });
    }
	

});