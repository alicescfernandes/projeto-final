function clickFunction() {
    document.querySelector('#menu-show').checked = false;
}
window.onload = function() {
    document.querySelector(".audio").onclick = function(){
      document.getElementsByTagName("audio")[0].paused ? document.querySelector(".play").classList.remove("icon-controller-play") & document.querySelector(".play").classList.add("icon-controller-paus") & document.getElementsByTagName("audio")[0].play() : document.getElementsByTagName("audio")[0].pause() & document.querySelector(".play").classList.remove("icon-controller-paus") & document.querySelector(".play").classList.add("icon-controller-play");
    }


document.body.addEventListener('touchstart', function(event){console.log(event)})
document.body.addEventListener('touchend', function(event){console.log(event)})

    /*
    INICIO DE CÓDIGO DE SLIDES
    */

    var currentSlide = 1; //Define o primeiro slide como o slide actual
    var slideContainer = document.querySelector('.slide-container'); //Seleciona a div.slide-container que contem todos os slides
    var screenW = window.screen.availWidth; //Guarda o tamanho factual do ecrã, para fazer calculos de dimensões de imagens
    var slides = document.getElementsByClassName('slide') || null; //Este operador tenário define a variavel como o conjuto dos slides, ou se os slides não exisiterm, nulifica a variável
    if(document.querySelector('li[data-slide="' + currentSlide + '"]')) document.querySelector('li[data-slide="' + currentSlide + '"]').classList.add("active") //Seleciomna o primeiro slide e aplica-lhe a classe active
    var slideDuration = 6 //6 segundos //duração em segundos de cada slied

    slideContainer.style.width = screenW * slides.length + "px"; //Define o tamanho do slide para o tamanho do ecrã
    for(var i = 0; i!= slides.length;i++){
      slides[i].style.width = screenW + "px"; //Define o tamanho de cada slide para o tamanho do ecrã
    }
    var intervalo = window.setInterval(function() { //Função que executa a cada X segundos.
      //Aumenta o numero do slide. Se o numero do slide corresponder ao último index da array, reseta o numero para 1;
        if (currentSlide <= slides.length - 1) {
            currentSlide++
        } else {
            currentSlide = 1
        }

        var currentSlideDOM = document.querySelector('.slide[data-slide="' + currentSlide + '"]'); //Seleciona o slide com base na variavel currentSlide . É neste slide que acontece todas as modificações.

        if (document.getElementsByClassName("active")) { //Este bloco serve para remover todas os list items que estão ativos
            var slideControls = document.getElementsByClassName('slider-control');
            for (var element = 0; element != slideControls.length; element++) {
                if (slideControls[element].classList.contains("active")) {
                    slideControls[element].classList.remove('active');
                }
            }
        }

        document.querySelector('li[data-slide="' + currentSlide + '"]').classList.add("active") //Seleciona o list-item corresponnte ao slide aplica a classe active
        slideContainer.style.left = (currentSlideDOM.offsetLeft * -1) + "px" //Fa< a transição de slides através do da posição left a multiplicar por -1
    }, slideDuration * 1000);


/* Este bloco trata dos cliques nos slide-controllers */
    document.body.onclick = function(event) {
      //Monitoriza todos os cliques
        if (event.target.className == "slider-control") {
          //Se o target do clique tiver a classe .slider-control
            if (document.getElementsByClassName("active")) {
              //Se houver .slider-control.active, apaga todos os .actives dos slider-control
                var slideControls = document.getElementsByClassName('slider-control');
                for (var element = 0; element != slideControls.length; element++) {
                    if (slideControls[element].classList.contains("active")) {
                        slideControls[element].classList.remove('active');
                    }
                }
            }
            document.querySelector('li[data-slide="' + event.target.getAttribute('data-slide') + '"]').classList.add("active") //Aplica a classe active ao target através dos data-attributes
            var currentWidth = document.querySelector('.slide[data-slide="' + event.target.getAttribute('data-slide') + '"]').offsetLeft * -1 //Calcula a proxima posição que o slide-container tem de ter através da data-slide do target aplicado na selecão do .slide através do nt
        }
    }

    /*
    FIM DE CÓDIGO DE SLIDES
    */
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
