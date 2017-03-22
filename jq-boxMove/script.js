var obj = jQuery('#object');
obj.animate({top: 0,left: 0 });

jQuery('#navigation div').click(function(){
  if( jQuery(this).hasClass('up') ){
    obj.animate({ "top": "-=50px" }, 10);
  }
  if( jQuery(this).hasClass('right') ){
    obj.animate({ "left": "+=50px" }, 10);
  }
  if( jQuery(this).hasClass('left') ){
    obj.animate({ "left": "-=50px" }, 10);
  }
  if( jQuery(this).hasClass('down') ){
    obj.animate({ "top": "+=50px" }, 10);
  }
});
