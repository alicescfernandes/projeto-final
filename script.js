function clickFunction(){
  document.querySelector('#menu-show').checked = false;
}



window.onload = function(){

  var slideContainer = document.querySelector('.slide-container');
  var screenW = window.screen.availWidth;
  var slides = document.getElementsByClassName('slide');
  slideContainer.style.width = screenW*slides.length + "px";

  var intervalo = window.setInterval(function(){
    console.log(1)
    var slidePosition = parseInt(slideContainer.style.left);
    var currentWidth = parseInt(slideContainer.style.left) || 0
    console.log((screenW*(slides.length - 1)) * -1)
    if(currentWidth > ((screenW* (slides.length-1)) * -1)){
      currentWidth = currentWidth - screenW;
}else{
  currentWidth = 0;
}
console.log(currentWidth)
slideContainer.style.left = currentWidth+ "px";
}, 6000);
}
