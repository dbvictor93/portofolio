// aceasta functie face ca sa se verifice tot documentul html apoi sa se incarce query
jQuery(document).ready(function(){
  //cand documentul sa incarcat complet
  var sw = $('#slider-wrapper');
// adapteaza slider-ul
adaptSlider();
// on resize ataptSlider
$(window).resize(  adaptSlider  );
});

// aceasta functie adapteaza dimensiunea slide-ului;
// conform dimensiunii ferestrei;
function adaptSlider(){
  var w = $(window).width();
  var h = $(window).height();
  console.log(w,h);
  //large
  if(w>=1200 && h>=720){
    var t = (h-600)/2;
    var l = (w-800)/2;
    $('#slider-wrapper')
    .css({
      'width' : '800px',
      'height' : '600px',
      'position' : 'absolute',
      'top' : t+'px',
      'left' : l+'px',
    });
  }
  //phone
  else {
    // comparam proportiile pentru a
  // afla in ce pozitie se afla telefonu
  if(w > h){
    //horizontal
    var ws = h * 4/3;
    var l = (w-ws)/2;
    $('#slider-wrapper')
    .css('width',ws+'px')
    .css('left',l+'px')
    .css('height',h+'px')
    .css('position','absolute')
    .css('top',t+'px')
  }
  else{
    //vertical
    var hs = w * 3/4;
    var t = (h-hs)/2;
    $('#slider-wrapper')
    .css('width', w+'px')
    .css('left', '0')
    .css('height', hs+'px')
    .css('position', 'absolute')
    .css('top', t+'px')

  }
 }
}
