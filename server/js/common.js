

//---------------------------------------------------------
//--------------------------------------------------------- 
$( window ).load(function() {  
  
 
    $( ".sub-menu br" ).replaceWith( " " );
   
     

 var i=1; 
$( ".debug button" ).click(function() {
      
     if(i==0){
       $('head').append('<style>body .body_debug_bg{display: none !important;}</style>');
       $(this).css('background-color', 'green');
       i++;
     }
     else{
      i=0;
      $('head').append('<style>body .body_debug_bg{display: block !important;}</style>');
      $(this).css('background-color', 'red');
     } 
});
 
$('.client_courusel').slick({
  infinite: true,
  rows: 2,
  slidesToShow: 4,
  slidesToScroll: 4,
  dots: true,
  arrows: false,
  responsive: [
    {
      breakpoint: 1100,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 680,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ] 
});

  // google map
  var map;
    $('.box').click(function(event) {
        if($('.box').hasClass('active')) {
            $('.box').removeClass('active');
            $('.box').animate({'bottom': '-107px'}, 400);
        } 
      else {
            $('.box').addClass('active');
            $('.box').animate({'bottom': '-350px'}, 400);
      }
    });

function initMap_contact() {

 map = new google.maps.Map(document.getElementById('contact_map'), {
          center: {lat: 50.4430202, lng: 30.5303176},
          scrollwheel: false,
          zoom: 14, 
        });

 
    marker = new google.maps.Marker({
            position: {lat: 50.4490362, lng: 30.5303176},
            map: map
        });

    
  
}

initMap_contact();
  //------------------------------------

});
