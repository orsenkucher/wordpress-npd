jQuery(function($){
 	"use strict";
   	jQuery('.main-menu > ul').superfish({
		delay:       500,
		animation:   {opacity:'show',height:'show'},
		speed:       'fast'
	});
});

function vw_education_lite_menu_open_nav() {
	window.vw_education_lite_responsiveMenu=true;
	jQuery(".sidenav").addClass('show');
}
function vw_education_lite_menu_close_nav() {
	window.vw_education_lite_responsiveMenu=false;
 	jQuery(".sidenav").removeClass('show');
}

jQuery(document).ready(function () {
	window.vw_education_lite_currentfocus=null;
  	vw_education_lite_checkfocusdElement();
	var vw_education_lite_body = document.querySelector('body');
	vw_education_lite_body.addEventListener('keyup', vw_education_lite_check_tab_press);
	var vw_education_lite_gotoHome = false;
	var vw_education_lite_gotoClose = false;
	window.vw_education_lite_responsiveMenu=false;
 	function vw_education_lite_checkfocusdElement(){
	 	if(window.vw_education_lite_currentfocus=document.activeElement.className){
		 	window.vw_education_lite_currentfocus=document.activeElement.className;
	 	}
 	}
 	function vw_education_lite_check_tab_press(e) {
		"use strict";
		// pick passed event or global event object if passed one is empty
		e = e || event;
		var activeElement;

		if(window.innerWidth < 999){
		if (e.keyCode == 9) {
			if(window.vw_education_lite_responsiveMenu){
			if (!e.shiftKey) {
				if(vw_education_lite_gotoHome) {
					jQuery( ".main-menu ul:first li:first a:first-child" ).focus();
				}
			}
			if (jQuery("a.closebtn.mobile-menu").is(":focus")) {
				vw_education_lite_gotoHome = true;
			} else {
				vw_education_lite_gotoHome = false;
			}

		}else{

			if(window.vw_education_lite_currentfocus=="responsivetoggle"){
				jQuery( "" ).focus();
			}}}
		}
		if (e.shiftKey && e.keyCode == 9) {
		if(window.innerWidth < 999){
			if(window.vw_education_lite_currentfocus=="header-search"){
				jQuery(".responsivetoggle").focus();
			}else{
				if(window.vw_education_lite_responsiveMenu){
				if(vw_education_lite_gotoClose){
					jQuery("a.closebtn.mobile-menu").focus();
				}
				if (jQuery( ".main-menu ul:first li:first a:first-child" ).is(":focus")) {
					vw_education_lite_gotoClose = true;
				} else {
					vw_education_lite_gotoClose = false;
				}
			
			}else{

			if(window.vw_education_lite_responsiveMenu){
			}}}}
		}
	 	vw_education_lite_checkfocusdElement();
	}
});

(function( $ ) {

	jQuery(window).load(function() {
	    jQuery("#status").fadeOut();
	    jQuery("#preloader").delay(1000).fadeOut("slow");
	})

	$(window).scroll(function(){
		var sticky = $('.header-sticky'),
		scroll = $(window).scrollTop();

		if (scroll >= 100) sticky.addClass('header-fixed');
		else sticky.removeClass('header-fixed');
	});

	$(document).ready(function () {
		$(window).scroll(function () {
		    if ($(this).scrollTop() > 100) {
		        $('.scrollup i').fadeIn();
		    } else {
		        $('.scrollup i').fadeOut();
		    }
		});

		$('.scrollup i').click(function () {
		    $("html, body").animate({
		        scrollTop: 0
		    }, 600);
		    return false;
		});
	});

})( jQuery );