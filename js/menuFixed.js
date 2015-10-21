function menuFixed() {
    var menuY = (0) +
                (parseInt($( "body" ).css("padding-top") )) +
                (parseInt($( "#content" ).css("padding-top") ));
    var distanceY = window.pageYOffset || document.documentElement.scrollTop,
        fixedOn = menuY;

    if (distanceY > fixedOn) {
      $( ".navbar" ).addClass("fixed");
    } else {
        if ($( ".navbar" ).hasClass("fixed")) {
          $( ".navbar" ).removeClass("fixed");
        }
    }
}
