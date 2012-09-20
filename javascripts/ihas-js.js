jQuery(function(){
    jQuery("#slideshow").slides({
        effect: 'fade',
        crossfade: true,
        fadeSpeed: 1000,
        play: 5000,
        generatePagination:false
    });
});