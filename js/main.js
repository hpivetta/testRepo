$(document).ready(function(){

	//slider init
	$("#slides").responsiveSlides({
		speed: 30000,     //Speed of the transition
		timeout: 500,  //Time between slide transitions
		pager: true     //Show the pagination
	});
	

	//wow.js init
	wow = new WOW(
	    {
		  animateClass: 'animated',
		  mobile: false,
		  offset: 100
		}
	);
	wow.init();
	
});





