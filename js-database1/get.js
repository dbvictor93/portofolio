document.body.onload = init;
function init(){
  
var database = document.getElementById('database');
database.onclick = redirect;
function redirect(){
  window.location = "./index.html";
}

// var key = localStorage.key(name)
// console.log( key );
// console.log( localStorage.getItem(key) );

if (window.localStorage.length != 0) {
  for(i in localStorage){
    var n = i;
    var p = localStorage.getItem(i);
    document.getElementById('res').innerHTML +=
    `
    <tr>
      <td>${n}</td>
      <td>${p}</td>
      <td></td>
    </tr>
    `
  }
} else {
  document.getElementById('res').innerHTML = "localStorage is empty!"
}


var del = document.getElementById('remove');
del.onclick = remov;
function remov(){
  for(i in localStorage){
  localStorage.removeItem(i);
  document.getElementById('res').innerHTML = "";
  }
}

}
