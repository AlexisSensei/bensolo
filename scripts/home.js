//Menu Burger 
$(".SWicon").click(function() {
  $('#Menu').toggleClass("touch");
  var burger = document.getElementById("buttons");
  if (burger.style.display === "block") {
    burger.style.display = "none";
  } else {
    burger.style.display = "block";
  }
});
//user descend dans la page menu disparait - user remonte menu réapparait
var Scroll = window.pageYOffset;
window.onscroll = function(){
  var CurrentScroll = window.pageYOffset;
  if(Scroll > CurrentScroll){
    document.getElementById("Menu").style.top = "0";
  } else{
    document.getElementById("Menu").style.top = "-100px";
  }
  Scroll = CurrentScroll;
}




