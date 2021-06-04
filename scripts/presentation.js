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
var ship = document.getElementById('Shuttle');
ship.addEventListener("click", function(){
  alert('Voici la navette de Kylo Ren que l\'on peut voir dans les 3 derniers épisodes de la Saga');
})

var bigShip = document.getElementById('croiseur');
bigShip.addEventListener("mouseover", function(){
  alert('C\'est son croiseur principal ! en voici une image !');
})



