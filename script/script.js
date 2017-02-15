function clickFunction() {
    document.querySelector('#menu-show').checked = false;
}
window.onload = function() {

    var currentSlide = 1;
    document.querySelector('li[data-slide="' + currentSlide + '"]').classList.add("active")
    var slideContainer = document.querySelector('.slide-container');
    var screenW = window.screen.availWidth;
    var slides = document.getElementsByClassName('slide');
    var slideDuration = 6 //6 segundos

    slideContainer.style.width = screenW * slides.length + "px";
    for(var i = 0; i!= slides.length;i++){
      slides[i].style.width = screenW + "px";
    }
    var intervalo = window.setInterval(function() {

        if (currentSlide <= slides.length - 1) {
            currentSlide++
        } else {
            currentSlide = 1
        }

        var currentSlideDOM = document.querySelector('.slide[data-slide="' + currentSlide + '"]');

        if (document.getElementsByClassName("active")) {
            var slideControls = document.getElementsByClassName('slider-control');
            for (var element = 0; element != slideControls.length; element++) {
                if (slideControls[element].classList.contains("active")) {
                    slideControls[element].classList.remove('active');
                }
            }
        }

        document.querySelector('li[data-slide="' + currentSlide + '"]').classList.add("active")
        slideContainer.style.left = (currentSlideDOM.offsetLeft * -1) + "px"
    }, slideDuration * 1000);

    document.body.onclick = function(event) {
        if (event.target.className == "slider-control") {
            if (document.getElementsByClassName("active")) {
                var slideControls = document.getElementsByClassName('slider-control');
                for (var element = 0; element != slideControls.length; element++) {
                    if (slideControls[element].classList.contains("active")) {
                        slideControls[element].classList.remove('active');
                    }
                }
            }
            document.querySelector('li[data-slide="' + event.target.getAttribute('data-slide') + '"]').classList.add("active")
            var currentWidth = document.querySelector('.slide[data-slide="' + event.target.getAttribute('data-slide') + '"]').offsetLeft * -1
            document.querySelector('.slide-container').style.left = currentWidth + "px";
            currentSlide = parseInt(event.target.getAttribute('data-slide'));
        }
    }

    /*document.querySelector("#animation").onclick = function() {
        document.querySelector("#animation > div").classList.add("button-animate");
        window.setTimeout(function() {
            document.querySelector("#animation > div").classList.remove("button-animate");
            location.href = location.href + document.querySelector("#animation").getAttribute('href');
        }, 150)
        return false;

    }*/

}


$(document).ready(function(){
  console.log(1)
  $('.fancybox').fancybox({
		helpers	: {
			title	: {
				type: 'inside'
			}
		}
	});
})
