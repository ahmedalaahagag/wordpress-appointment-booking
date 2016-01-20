jQuery(document).ready(function() {
	
	(function ($){
		
		if( $( window ).width() > 1260 ){
				
			var total_width = $( window ).width();
			var diff = $( window ).width() - 1260;
			diff = diff + 90;
			var margin = 0 - diff/2;
			
			$(".download_section").css({"width":total_width+"px",
				"margin-left":margin+"px",
				"margin-right":"0px",
				"padding":"0px",
				"padding-bottom":"45px"
			}) 
		}
		 
	}(jQuery));

});// - document ready

jQuery(window).load(function() {
	
	(function ($){
	
		

	}(jQuery));

});// - window load
