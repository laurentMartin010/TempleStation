
// ==========================================================================
//            SIDE-BAR 
// ==========================================================================


/* déclenche le toggle avec la sidebar*/ 
(function($){
  $('#header__icon').click(function(e){
    e.preventDefault();
    $('body').toggleClass('with--sidebar');
  })
})(jQuery);

$('#site-cache').click(function(e){
    $('body').removeClass('with--sidebar');
})

// ==========================================================================
//          FLECHE SCROLL
// ==========================================================================

$(function() {
  $('a[href*=#]').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 1800, 'linear');
  });
});


// ==========================================================================
//          VIDEO
// ==========================================================================


$(function() {
    $('a[href*=#]').on('click', function(e) {
      e.preventDefault();
      $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 400, 'linear');
    });
  });




// ==========================================================================
// EFFET CLIGNOTTE  sur LEGEND "TEMPLE STATION" du Fielset
// ==========================================================================


let blink_speed = 400;
let t = setInterval(function () { let ele = document.getElementById('blinker'); 
ele.style.visibility = (ele.style.visibility == 'hidden' ? '' : 'hidden'); },
blink_speed);



// ==========================================================================
// OPACITY SUR IMAGES AU PASSAGE ET A LA SORTIE DE LA SOURIS (index.php)
// ==========================================================================


$(document).ready(function(){
})
		$(".inside-legend img").hover(function()
		{$(this).stop().animate({"opacity": 0.9});}
		, function(){$(this).stop().animate({"opacity": 0.5});				
});
/* 
$(".readAll").click(function(){
  $("div").animate({left: '250px'});
}); 

*/


// ==========================================================================
// OPACITY SUR IMAGES AVEC TEXT CACHÉ DANS BAND.PHP
// ==========================================================================

$(document).ready(function(){
})
		$(".image").hover(function()
		{$(this).stop().animate({"opacity": 0.3});}
		, function(){$(this).stop().animate({"opacity": 1});				
});




// ==========================================================================
// EFFET SUR TEXTE "ONVIDEO" 
// ==========================================================================
/*
anime.timeline({loop: false})
  .add({
    targets: '.effetJs',
    scale: [56,1],
   // opacity: [0,0.7],
    easing: "easeOutCirc",
    duration: 800,
    delay: function(el, i) {
      return 800 * i;
    }
    })/*.add({
    targets: '.ml15',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
*/



/* ==========================================================================
   Effet sur DISCOVER et LISTEN (index.php)
   ========================================================================== */

// lettre  par lettre dans un span 

/*
$('.ml13').each(function(){
  $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
});

anime.timeline({loop: false})
  .add({
    targets: '.ml13 .letter',
    translateY: [100,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 3800,
    delay: function(el, i) {
      return 1900 + 0 * i;
    }
  })/*.add({
    targets: '.ml13 .letter',
    translateY: [0,-100],
    opacity: [1,0],
    easing: "easeInExpo",
    duration: 1200,
    delay: function(el, i) {
      return 100 + 30 * i;
    }
  });
  */
 


// ==========================================================================
// CAROUSEL page PHOTOS.PHP
// ==========================================================================

 var flkty = new Flickity( '.carousel js-flickity', {
  // options
  cellAlign: 'left',
  contain: true
});



