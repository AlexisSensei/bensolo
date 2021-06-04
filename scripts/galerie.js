console.log('hello bg')
console.log('en vrai le js c cool')
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
//lightBox Galerie
$(function (){
  $(".petite").click(function(){
    var LowImg = $(this).attr('src');
    $(".fullscreen").html("<img src='" + LowImg + "'>");
    $(".fullscreen").fadeIn("slow").css("display", "flex");
  });

  $(".fullscreen").click(function (){
    $(".fullscreen").fadeOut("fast");
  })
})

//Filter System
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("episode");
  console.log(c);
  if (c == "all") c = "";
  console.log(c);
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) { //element est episode et name est seven ou eight ou nine
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


var Filters = document.getElementById("myfilters");
var filt = Filters.getElementsByClassName("filter");
for (var i = 0; i < filt.length; i++) {
  filt[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}

