$(document).ready(function(){

    // Galleria.loadTheme(SiteParameters.theme_directory+'/js/galleria/themes/classic/galleria.classic.min.js');
    // Galleria.run('.slider--product');
/*	$('.slider--product').unslider({
		speed: 500,               //  The speed to animate each slide (in milliseconds)
		delay: 3000,              //  The delay between slide animations (in milliseconds)
		complete: function() {},  //  A function that gets called after every slide animation
		keys: true,               //  Enable keyboard (left, right) arrow shortcuts
		dots: true,               //  Display dot navigation
		fluid: true              //  Support responsive design. May break non-responsive designs
		});*/
});
/*$(document).ready(function(){
//start homepage banner
//in order for the unslider plugin to correctly calculate the height of an image’s parent div on page load, we must not initialize until its first image has loaded
//hide the banner so that users don't see the images until the slider is initialized
                $('.slider--product').hide();

                var callUnslider = function(){

                    $('.slider--product').show();

                    var unslider = $('.slider--product').unslider({
                        speed : 1500,                //  The speed to animate each slide (in milliseconds)
                        delay : 3000,               //  The delay between slide animations (in milliseconds)
                        complete : function() {},   //  A function that gets called after every slide animation
                        keys : true,                //  Enable keyboard (left, right) arrow shortcuts
                        dots : true,                //  Display dot navigation
                        fluid : false               //  Support responsive design. May break non-responsive designs
                    });
                }
                $('.unslider-arrow').click(function() {
                    var fn = this.className.split(' ')[1];

                    //  Either do unslider.data('unslider').next() or .prev() depending on the className
                    unslider.data('unslider')[fn]();
                });

                //if IE caches the images, it will never fire a load event for it
                //here we add a query string to the first banner image's src attribute, so that IE will not cache the image.

                //get the image's src attribute
                var source = $('.slider--product ul li img').first().attr("src");
                //add the date as a query string to the image's src attribute, so that every time the page is refreshed, IE will reload it and fire the load event
                $('.slider--product ul li img').first().attr("src",source + "?" + new Date().getTime());
                //initilize the unslider plugin, but only after the first image loads
                $('.slider--product ul li img').first().load(function(){callUnslider ()});
});*/

