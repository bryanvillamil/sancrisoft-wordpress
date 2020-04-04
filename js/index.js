jQuery(document).ready(function(){
  jQuery(window).load(function() {
    jQuery('.flexslider').flexslider({
      animation: "slide",
      pauseOnAction: true, // default setting
      after: function(slider) {
        /* auto-restart player if paused after action */
        if (!slider.playing) {
          slider.play();
        }
      }
    });
  });
})