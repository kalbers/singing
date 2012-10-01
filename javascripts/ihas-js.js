jQuery(function(){
  jQuery("#slideshow").slides({
      effect: 'fade',
      crossfade: true,
      fadeSpeed: 1000,
      play: 5000,
      generatePagination:false
  });
});

jQuery(document).ready(function(){
    jQuery("#jquery_jplayer_1").jPlayer({
      ready: function () {
        jQuery(this).jPlayer("setMedia", {
          m4a: "http://www.jplayer.org/audio/m4a/Miaow-07-Bubble.m4a"
        });
      },
      swfPath: "/js",
      supplied: "m4a"
    });
  });


jQuery(function() {
  jQuery( ".tabbed" ).tabs();
});
