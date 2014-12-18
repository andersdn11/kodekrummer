$(document).ready(function(){


//Vis/skjul log ind boks 
	$('#loginBtn').on('click', function(){

		if( $('ul li > form').is(':visible')){

			$('ul li > form').hide(100);	

		} else{

			$('ul li > form').show(100);	
		}
		

	
	});
});