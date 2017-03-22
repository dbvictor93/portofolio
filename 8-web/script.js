var db = ["images/slide1.jpg", "images/slide2.jpg", "images/slide3.jpg", "images/slide4.jpg", "images/slide5.jpg"];
var img = document.querySelector('section .slideshow img');

var position = 1;

setInterval(function(){
  img.src = db[position];
  position++;
  if(position == 5){
    position = 0;
  }
}, 2000);
