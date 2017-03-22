jQuery(document).ready( init );
  // functia de initiere a slider-ului
function init(){
  // adaugam sagetile de navigare
  jQuery('#slider-wrapper').append('<a href="#" class="prev"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i></a> <a href="#" class="next"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i></a>');

  showSlide();
  // timer 3 seconds
  setInterval( next, 5000 );

}

// functia de afisare a slide-ului curent
function showSlide(){
  // alegem aliator indicele unui efect
  var pos = parseInt( Math.random() * InEffects.length );
  var current_slide = slides[0];
  var slider_wrapper = jQuery('#slider-wrapper');
  slider_wrapper.find('img').remove();
  slider_wrapper.append("<img class='animated "+InEffects[pos]+"' src='" + current_slide.url + "'>");
}

// functia de ascundere a slide-ului curent
function hideSlide(){
  // alegem aliator indicele unui efect
  var pos = parseInt( Math.random() * OutEffects.length );
  var current_slide = jQuery('#slider-wrapper img');
  current_slide.attr('class',"");
  current_slide.addClass("animated " + OutEffects[pos]);

}

// functia data va trece la urmatorul slide
function next(){
  hideSlide(); // ascundem slide-ul precedent
  slides.push( slides.shift() );
  setTimeout( showSlide, 1000 );
}
// functia data va trece la precedentul slide
function prev(){
  hideSlide(); // ascundem slide-ul precedent
  slides.unshift( slides.pop() );
  setTimeout( showSlide, 1000 );
}
