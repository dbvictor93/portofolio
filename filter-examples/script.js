var btn = document.getElementById('btn');
btn.onclick = function(){
  document.getElementById('img').style.filter = 'none';
}

var btn1 = document.getElementById('btn1');
btn1.onclick = function(){
  document.getElementById('img').style.filter = 'grayscale(100%)';
}

var btn2 = document.getElementById('btn2');
btn2.onclick = function(){
  document.getElementById('img').style.filter = 'blur(3px)';
}

var btn3 = document.getElementById('btn3');
btn3.onclick = function(){
  document.getElementById('img').style.filter = 'brightness(200%)';
}

var btn4 = document.getElementById('btn4');
btn4.onclick = function(){
  document.getElementById('img').style.filter = 'contrast(200%)';
}

var btn5 = document.getElementById('btn5');
btn5.onclick = function(){
  document.getElementById('img').style.filter = 'drop-shadow(4px 4px 4px black)';
}


var btn6 = document.getElementById('btn6');
btn6.onclick = function(){
  document.getElementById('img').style.filter = 'hue-rotate(90deg)';
}

var btn7 = document.getElementById('btn7');
btn7.onclick = function(){
  document.getElementById('img').style.filter = 'invert(100%)';
}

var btn8 = document.getElementById('btn8');
btn8.onclick = function(){
  document.getElementById('img').style.filter = 'opacity(30%)';
}

var btn9 = document.getElementById('btn9');
btn9.onclick = function(){
  document.getElementById('img').style.filter = 'saturate(200%)';
}

var btn10 = document.getElementById('btn10');
btn10.onclick = function(){
  document.getElementById('img').style.filter = 'sepia(100%)';
}



var inp = document.getElementById('cl');
  inp.onclick = function(){
    var val = inp.checked;
    if( val == true ){
      document.getElementById('img').src = 'image2.jpg';
    } else if( val == false ) {
      document.getElementById('img').src = 'image.jpg';
    }
}
