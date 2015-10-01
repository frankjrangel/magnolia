function menuFixed() {
    var menuY = (-5) +
                (parseInt($( ".banda-logo" ).css("top")) * 2 ) +
                (parseInt($( ".banda-logo" ).css("height") )) +
                (parseInt($( ".navbar" ).css("padding-top") ));
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
