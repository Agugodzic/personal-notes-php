var sideMenu = document.getElementById("nav-side-menu");
var userMenu = document.getElementById("nav-user-menu");

function switchMenu(e){
  e.preventDefault();
  e.stopPropagation();
  if(sideMenu.style.display == "inline-block"){
    sideMenu.style.display= "none";  
  }else{
    sideMenu.style.display = "inline-block";
  }
};

function switchUserMenu(e){
  e.preventDefault();
  e.stopPropagation();
  if(userMenu.style.display == "inline-block"){
    userMenu.style.display = "none";  
  }else{
    userMenu.style.display = "inline-block";
  }
};

function cerrarSesion(){
  window.location.href="/log-out";
};

let buttonUserMenu = document.getElementById("nav-log-button").addEventListener("click", switchUserMenu, false);
let buttonSideMenu = document.getElementById("nav-side-button").addEventListener("click", switchMenu, false);

document.addEventListener("click", function(e){
  var sideClick = e.target;
  if(sideMenu.style.display =='inline-block' && sideClick != sideMenu){
    sideMenu.style.display ='none';
  }
}, false);

document.addEventListener("click", function(e){
  var userClick = e.target;
  if(userMenu.style.display =='inline-block' && userClick != userMenu){
    userMenu.style.display ='none';
  }
}, false);