/**
 * Theme's main JS.
 *  
 * @license https://opensource.org/licenses/MIT MIT
 * @author Vee W.
 */


// jQuery on DOM is ready. ------------------------------------------------------------------------------------------------
jQuery(document).ready(function($) {
    // mark no-js class as js because JS is working.
    $('html').removeClass('no-js').addClass('js');
});

$('.banners').slick({
	dots: false,
	arrows: false,
	infinite: true,
	speed: 1000,
	fade: true,
	cssEase: 'linear',
	autoplay: true,
	autoplaySpeed: 3000
});

$('.has-slider-noarrows-1').slick({
	dots: false,
	arrows: false,
	infinite: true,
	speed: 1000,
	fade: true,
	cssEase: 'linear',
	autoplay: true,
	autoplaySpeed: 4200
});

$('.has-slider-noarrows-2').slick({
	dots: false,
	arrows: false,
	infinite: true,
	speed: 1000,
	fade: true,
	cssEase: 'linear',
	autoplay: true,
	autoplaySpeed: 6300
});

$('.has-slider-noarrows-3').slick({
	dots: false,
	arrows: false,
	infinite: true,
	speed: 1000,
	fade: true,
	cssEase: 'linear',
	autoplay: true,
	autoplaySpeed: 4800
});

$('.has-slider-noarrows-4').slick({
	dots: false,
	arrows: false,
	infinite: true,
	speed: 1000,
	fade: true,
	cssEase: 'linear',
	autoplay: true,
	autoplaySpeed: 5500
});

$('.has-slider-warrows').slick({
	dots: true,
	infinite: true,
	speed: 500,
	fade: true,
	cssEase: 'linear'
});

// menu hover dorpdown

jQuery('.menu-item.dropdown').hover(
	function(){
		var thisElement = jQuery(this);
		thisElement.find('.dropdown-menu').addClass('showtrans');
		setTimeout(function() {
			thisElement.find('.dropdown-menu').removeClass('showtrans')
		    thisElement.addClass('show').find('.dropdown-menu').addClass('show');
		}, 50);


	},
	function(){
		var thisElement = jQuery(this);
		thisElement.find('.dropdown-menu').addClass('showtrans');
		setTimeout(function() {
			thisElement.find('.dropdown-menu').removeClass('showtrans')
		    thisElement.removeClass('show').find('.dropdown-menu').removeClass('show');
		}, 50);
});

jQuery('#menu-item-229 > a').on('click', function() {
  /*$.fancybox.open( $('#register'), {
    touch: false
  });*/
  jQuery('.navbar-toggler').trigger('click');

});

// smooth scroll to ID
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 500);
});

jQuery('.navbar-toggler').click(function(){
	jQuery('header').toggleClass('sticky');
});

var prevScroll = 0;
window.addEventListener('scroll', function() {
	var scrollTop = window.pageYOffset || window.scrollTop; //current point to top
	if(prevScroll < scrollTop && !jQuery('#header-right-button').hasClass('show')){
		jQuery('#header-right-button').addClass('show');		
	}else if(prevScroll > scrollTop && jQuery('#header-right-button').hasClass('show')){
		jQuery('#header-right-button').removeClass('show');
	}
	prevScroll = scrollTop;
});