let aspectPage = document.getElementById("config-page-aspect");
let userPage = document.getElementById("config-page-user");

function changePage(page){
  if(page == "aspect"){
    aspectPage.style.display = "block";
    userPage.style.display = "none";    
  }else if(page == "user"){
    aspectPage.style.display = "none";
    userPage.style.display = "block";
  }
}