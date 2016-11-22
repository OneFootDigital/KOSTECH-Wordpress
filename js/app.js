(function($) {

	$(document).ready(function() {

		// Menu Toggle
		$('.toggle-me').on('click', function(e){
		  
		  e.preventDefault();
		  
		  $('body').toggleClass('nav-collapsed');
		  
		});

	});

}(jQuery));