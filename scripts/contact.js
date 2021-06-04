//Menu Burger 
$(".SWicon").click(function() {
  $('#Menu').toggleClass("touch");
  var burger = document.getElementById("buttons");
  if (burger.style.display === "block") {
    burger.style.display = "none";
  } else {
    burger.style.display = "block";
  }
  console.log(burger)
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
//parallax
window.addEventListener("scroll", function() {
  const distance = window.scrollY;
  document.querySelector('.parallax').style.transform = `translateY(${distance * 0.55}px)`;
});
//Formulaire de Contact
var lastName = document.getElementById("lastName");
var firstName = document.getElementById("firstName");
var mail = document.getElementById("email");
var msg = document.getElementById("message");
var validerrorL = document.getElementById("txtL");
var validerrorF = document.getElementById("txtF");
var validerror2 = document.getElementById("txt2");
var validerror3 = document.getElementById("mailerror");
var button = document.getElementById("send");
console.log('button reconnu');
button.addEventListener('click', Form);
var probleme;

function Form(event){
  if (lastName.value === ""){
    event.preventDefault();
    console.log("vérification NOM");
    validerrorL.innerHTML=('pas NOM renseigné');
    validerrorL.style.color = 'red';
    validerrorL.style.fontWeight = 'bold';
  }

  if (firstName.value === ""){
    event.preventDefault();
    console.log("vérification Prénom");
    validerrorF.innerHTML=('pas Prénom renseigné');
    validerrorF.style.color = 'red';
    validerrorF.style.fontWeight = 'bold';
  }

  if (mail.value === ""){
    event.preventDefault();
    console.log("vérification email");
    validerror3.innerHTML=('pas d\'email renseigné');
    validerror3.style.color = 'red';
    validerror3.style.fontWeight = 'bold';
  }
  
  if (msg.value === ""){
    event.preventDefault();
    console.log("vérification message");
    validerror2.innerHTML=('pas de message renseigné');
    validerror2.style.color = 'red';
    validerror2.style.fontWeight = 'bold';
  }
  else {
    console.log('aucun problème message envoyé')
    alert(' Transmission envoyé Padawan !')
  }
};

