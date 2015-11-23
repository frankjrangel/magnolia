$(function() {


  //cache DOM elements
  var $slider = $('#slider');
  var $wrapper = $('.wrapper', $slider);
  var $slides = $('.slides', $wrapper);
  var $slide = $('.slide', $slides);
  var $slide_prev = $('#slide_prev', $slider);
  var $slide_next = $('#slide_next', $slider);

	//adding final slides
	$slide.clone().appendTo( $slides );
	$slide = $('.slide', $slides);
  var slidelenght = $slide.length;

  //setting responsive values
  var slidewidth = 200;
  var slideswidth = slidelenght * slidewidth;
  $slides.css('width', slideswidth + "px");
  $slide.css('width', slidewidth + "px");

  slidelenght = (slidelenght / 2) + 1;

  //configuration
  var animationSpeed = 1000;//500
  var pause = 8000;//8000
  var currentSlide = 1;

  var interval;


  function startSlider() {
      interval = setInterval(function() {
		currentSlide++;
		go_to_slide(currentSlide);
      }, pause);
  }

	function slide_prev() {
		currentSlide--;
		go_to_slide(currentSlide);
    }

  function slide_next() {
	currentSlide++;
		go_to_slide(currentSlide);
  }

	function go_to_slide(current){

		if (currentSlide === slidelenght) {
			$slides.animate({
				'margin-left': '-' + ((current-1) * slidewidth) + 'px'
			},
			animationSpeed,
			function(){
				$slides.css('margin-left', '0px');
			});
			currentSlide = 1 ;

		}
		else if (currentSlide === 0) {
			$slides.css('margin-left', '-' + ((slidelenght-1) * slidewidth) + 'px');
			$slides.animate({
				'margin-left': '-' + ((slidelenght-2) * slidewidth) + 'px'
			},
			animationSpeed
			);
			currentSlide = slidelenght-1 ;
		}
		else{
			$slides.animate({
					'margin-left': '-' + ((current-1) * slidewidth) + 'px'
  		},
  		animationSpeed
  		);
  	}
  }

  function pauseSlider() {
      clearInterval(interval);
  }

  $slider
      .on('mouseenter', pauseSlider)
      .on('mouseleave', startSlider);
  $slide_prev
      .on('click', slide_prev);
  $slide_next
      .on('click', slide_next);

  startSlider();


});﻿
