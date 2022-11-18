$(document).ready(function () {
    "use strict";
    //PRE LOADING
    $('#status').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
    $('body').delay(350).css({
        'overflow': 'visible'
    });
    
    
    $(".pop-up-content a").on("click", function(){
        $(".max-wi").addClass("act");
    })
    
    
    $(".pop-up2 i").on("click", function(){
         $(".max-wi").removeClass("act");
    })
     
    $(".pop-up-content").addClass("a1");
    $(".ban-img .tree").addClass("a2");
    $(".ban-img img").addClass("a3");
    $(".ban-img .shapes3").addClass("a4");
       $(".mango-ani").addClass("a5");
      $(".ban-img .m1").addClass("a6");
    
    
    
    
      $(document).mousemove(function(event){
            var _lfft = event.pageX + "px"; 
		  var _toppp = event.pageY + "px";
		  $(".modal-content .mousemove").css("left", _lfft);
		  $(".modal-content .mousemove").css("top", _toppp);
 
  });
    
  
    
    
});