// JavaScript Document

$("document").ready(function() {
    
	"use strict";
	
	// Scroll menu effect
	
	$(window).scroll(function() {

	  if ($(window).scrollTop() > 10 ) {
  
		  $("#main-header").addClass("fixed");
  
	  } else {
  
		  $("#main-header").removeClass("fixed");
	  }
	  
	});
	
	// Mobile Menu Haamburger effect
	
	$("#m-h-hamburger").click(function() {
        
		$(this).toggleClass("active");
		
		if( $(this).hasClass("active") ) {
			$("#m-h-mobile-menu").fadeIn();
		} else {
			$("#m-h-mobile-menu").fadeOut();
		}
		
    });
	
});