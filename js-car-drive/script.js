var car = document.querySelector('svg');
var left = document.querySelector('#left');
var right = document.querySelector('#right');
var back = document.querySelector('#back');
var up = document.querySelectorAll('.up');



document.body.onkeydown = function keyCode() {
    var x = event.keyCode;

    if (x == 38) { // up
        car.style.transform += "translateX(+10px)";
        up.style.fill="ffffff";
        back.style.fill="001A80";
    }
    if (x == 40) { // down
        car.style.transform += "translateX(-10px)";
        back.style.fill = "ff0000";
    }
    if (x == 39) { // right
        car.style.transform += "rotate(+10deg)";
        right.style.fill="ff0000";
    } else {
      right.style.fill="ffffff";
    }
    if (x == 37) { // left
        car.style.transform += "rotate(-10deg)";
        left.style.fill="ff0000";
    } else {
      left.style.fill="ffffff";
    }
    console.log(svg);
}
