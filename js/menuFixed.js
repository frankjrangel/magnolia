function menuFixed() {
    var menuY = (0) +
                (parseInt($( "body" ).css("padding-top") )) +
                (parseInt($( "#content-background" ).css("margin-top") )) +
                (parseInt($( "#content-background" ).css("padding-top") ));
    var distanceY = window.pageYOffset || document.documentElement.scrollTop,
        fixedOn = menuY;

    if (distanceY > fixedOn) {
      $( "#navbar" ).addClass("fixed");
      $( "#wings-navbar" ).addClass("fixed");
      $( ".heading-content" ).addClass("fixed");
    } else {
        if ($( "#navbar" ).hasClass("fixed")) {
          $( "#navbar" ).removeClass("fixed");
          $( "#wings-navbar" ).removeClass("fixed");
          $( ".heading-content" ).removeClass("fixed");
        }
    }
}
