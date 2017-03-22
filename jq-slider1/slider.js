// 1) gasim toate slidurile
var n = 1;
var slides = jQuery('#slider .slides li');
console.log( slides );
// 2) ascumdem toate elementele
//slides.css('display', 'none');
slides.fadeOut();
// 3) afisam primul slider
jQuery('#slider .slides li:first-child').fadeIn();
// 4) legam click-ul pe paginator de o functie
jQuery('#slider .pagination a').click( function(){
// 5) aflam numarul elementului apasat
  //alert( jQuery(this).text() )
n = jQuery(this).text();
// 6) inchidem toate slidurile
slides.fadeOut();
// 7) arata doar slide-ul curent
jQuery( '#slider .slides li:nth-child('+n+')' ).fadeIn();
} );

// 8) legam callback-urile de navigatie
jQuery('#slider .navigation a').click( function(){
// 9) aflam daca am apasat pe next sau prev
  if( jQuery(this).hasClass('prev') ){
    n--;
    if( n == 0 ){ n = 3; }
  }
  if( jQuery(this).hasClass('next') ){
    n++;
    if( n == 4 ){ n =1 }
  }
  slides.fadeOut();
  // 10) arata doar slide-ul curent
  jQuery( '#slider .slides li:nth-child('+n+')' ).fadeIn();
} );
