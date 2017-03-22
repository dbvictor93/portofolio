var n = 1;
var size = jQuery('.section #box');

size.width(500);
size.height(500);

jQuery('#size a').click(function(){
if( jQuery(this).hasClass('minus') ){
  size.width(500+n--);
  size.height(500+n--);
}
if( jQuery(this).hasClass('plus') ){
  size.width(500+n++);
  size.height(500+n++);
}
});

jQuery('#size input').change(function(){
  if( ((n = jQuery(this).val()) >= -160) &&
      ((n = jQuery(this).val()) <= 160)  ){
    size.width(500 + n++);
    size.height(500 + n++);
  } else {
    alert('Please, enter a value from -160 to 160')
  }
});
