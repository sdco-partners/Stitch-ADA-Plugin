(function($) {



$( document ).ready(function() {
    


	$('.stitch-ada-toggle').on('click', function(){

		$toggleClass = $(this).attr('id');

		$('html').toggleClass( $toggleClass );

	});





	//Font Size ///////////////////////////////////////////////

	var elements = $("body").find("*");

	
	elements.each(function() {
			
		originalSize = parseInt($(this).css("font-size"));

		$(this).attr('stitch-orgfontsize', originalSize );

		$(this).attr('stitch-newfontsize', originalSize );


		    
	});


	//increase font size ////////////////

	$('#stitch-ada-increase-font').on('click', function(){

		var elements = $("body").find("*");


		elements.each(function() {
				
			originalSize = parseInt($(this).css("font-size"));

			newSize =  parseInt($(this).attr('stitch-newfontsize'));


			$(this).css({'font-size':newSize + 3 });

			$(this).attr('stitch-newfontsize', newSize + 3 );

			
		    
		});



	});


	//decrease font size ////////////////

	$('#stitch-ada-decrease-font').on('click', function(){

		var elements = $("body").find("*");


		elements.each(function() {
				
			originalSize = parseInt($(this).css("font-size"));

			newSize =  parseInt($(this).attr('stitch-newfontsize'));


			$(this).css({'font-size':newSize - 3 });

			$(this).attr('stitch-newfontsize', newSize - 3 );

			
		    
		});

	});





});


})(jQuery);