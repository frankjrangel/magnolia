$(function() {


  //cache DOM elements
  var $slider = $('#slider');
  var $wrapper = $('.wrapper', $slider);
  var $slides = $('.slides', $wrapper);
  var $slide = $('.slide', $slides);
  var $slide_prev = $('#slide_prev', $slider);
  var $slide_next = $('#slide_next', $slider);

	//adding final slide
	$slide.first().clone().appendTo( $slides );
	$slide = $('.slide', $slides);
  var slidelenght = $slide.length;

  //setting responsive values
  var slidewidth = $slide.css('width') / $slide.css('width');
  var slideswidth = slidelenght * slidewidth;
  var new_slidewidth = 100 / slidelenght;
  $slides.css('width', slideswidth + "%");
  $slide.css('width', new_slidewidth + "%");

  alert(slidelenght);
  alert(slidewidth);
  alert(slideswidth);
  alert(new_slidewidth);

	//adding index
	var $slider_index = $('#slider_index', $slider);
	var $index = $('.index', $slider_index);

  /*	alert($slider.outerWidth(true)+
  			','+$slider_index.outerWidth(true)+
  			','+$width_index+
  			' - '+$index.outerWidth(true)
  			);
  */

	var $width_index = (slidelenght-1) * parseInt($index.outerWidth(true));

	$slider_index.width($width_index);
	$slider_index.css('margin-left', '-' + ($width_index/2) + 'px');

	for (i = 0; i < slidelenght-2; i++)
		$index.first().clone().appendTo( $slider_index );

  //configuration
  var animationSpeed = 2000;//500
  var pause = 80000;//8000
  var currentSlide = 1;

  var interval;


  function set_index(current) {
		$('.index', $slider_index).css({
			'background-position' : '-9px -49px',
			'opacity' : '0.3'
		});
		$('.index:nth-child(' + (current)  + ')', $slider_index).css({
			'background-position' : '-24px -49px',
			'opacity' : '0.9'
		});
	}
	set_index(1);

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
				'margin-left': '-' + ((current-1) * new_slidewidth) + '%'
			},
			animationSpeed,
			function(){
				$slides.css('margin-left', '0%');
			});
			currentSlide = 1 ;

		}
		else if (currentSlide === 0) {
			$slides.css('margin-left', '-' + ((slidelenght-1) * new_slidewidth) + '%');
			$slides.animate({
				'margin-left': '-' + ((slidelenght-2) * new_slidewidth) + '%'
			},
			animationSpeed
			);
			currentSlide = slidelenght-1 ;
		}
		else{
			$slides.animate({
					'margin-left': '-' + ((current-1) * new_slidewidth) + '%'
  		},
  		animationSpeed
  		);
  	}
	set_index(currentSlide);
  }

	function go_to_slide_index(){
		currentSlide = $('.index', $slider_index).index(this) + 1;
		set_index(currentSlide);
		go_to_slide(currentSlide);
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
	$('.index', $slider_index)
		.on('click', go_to_slide_index);


  startSlider();


});﻿
