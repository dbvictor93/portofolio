document.body.onresize = init;
var img = document.querySelector('img');

function init(){
  document.querySelector('h3').innerHTML = "Hight is "+ window.innerHeight + "  and Width is "+ window.innerWidth;
	  document.querySelector('section h1').innerHTML = "";
if( window.innerHeight >= 600 && window.innerWidth >= 1000 ){
  img.src="icons/desktop.png";

} else if( window.innerHeight >= 500 && window.innerWidth >= 800 ){

  img.src="icons/laptop.png";

} else if( window.innerHeight >= 400 && window.innerWidth >= 400 ){
  img.src="icons/tablet.png";

} else if( window.innerHeight >= 300 && window.innerWidth >= 200 ){

  img.src="icons/smartphone.png";
}


}
