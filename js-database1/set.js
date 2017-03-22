

document.body.onload = init;
function init(){

var submit = document.getElementById('submit');
submit.onclick = setData;
function setData(){
  var name = document.getElementById('name').value;
  var password = document.getElementById('password').value;
  window.localStorage.setItem(name,password);

}

}

var database = document.getElementById('database');
database.onclick = redirect;
function redirect(){
  window.location = "./database.html";
}
