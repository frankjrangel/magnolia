function bumpIt() {

	$('.sh').matchHeight();
	//$('.sh2').matchHeight();

	 /*var winHeight = $(window).innerHeight();
	 var HeaderFooterHeight = $('#footer').outerHeight() + $('#navbar').outerHeight();
	 var contentHeight = $('#content').outerHeight() + HeaderFooterHeight;


	 if(winHeight > contentHeight){
		 $('#footer').css('position','fixed');
		 $('#background').css('height', winHeight - HeaderFooterHeight );
	 }
	 else {
		 $('#footer').css('position','relative');
		 $('#background').css('height', $('#content').outerHeight() );
	 }*/
 }
 var didResize = false;

$( document ).ready(function() {
	bumpIt();


	$(window).resize(function() {
	  didResize = true;
	});

	setInterval(function() {
	  if(didResize) {
		didResize = false;
		bumpIt();
	  }
	}, 80);
});
