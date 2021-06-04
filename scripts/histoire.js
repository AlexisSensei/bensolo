console.log('main fonctionne');
//afficher texte
function showText(){
  console.log('tu appuies sur le bouton')
  var show = document.getElementById('synop')
  if (show.style.display === "none") {
    console.log('texte s\'affiche')
    show.style.display = "flex";
  } else {
    show.style.display = "none";
  }
}
function showText2(){
  console.log('tu appuies sur le bouton')
  var show = document.getElementById('synop2')
  if (show.style.display == "none") {
    console.log('texte s\'affiche')
    show.style.display = "flex";
  } else {
    show.style.display = "none";
  }
}
function showText3(){
  console.log('tu appuies sur le bouton')
  var show = document.getElementById('synop3')
  if (show.style.display == "none") {
    console.log('texte s\'affiche')
    show.style.display = "flex";
  } else {
    show.style.display = "none";
  }
}
//Menu Burger 
$(".SWicon").click(function() {
  $('#Menu').toggleClass("touch");
  var burger = document.getElementById("buttons");
  if (burger.style.display == "block") {
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
var Img = 1;
showSlides(Img);

function plusSlides(n) {
  showSlides(Img += n);
};

function currentSlide(n) {
  showSlides(Img = n);
};

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("P"); //recupere mes images et le texte associé
  if (n > slides.length) {Img = 1}
  if (n < 1) {Img = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  } //passer  à l'image suivante sans  garder  l'image montrée précédemment
  slides[Img-1].style.display = "block";
};