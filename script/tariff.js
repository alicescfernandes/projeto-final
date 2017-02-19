tariffs = {
	1:{
		"id":1,
		"nome":"Serviço Go",
		"dados": "500<sup>MB</sup>",
		"app":"5<sup>€</sup>",
		"cor":"rgb(16,224,78)",
		"preco":"1<sup>.50€</sup>"
	},
	2:{
		"id":2,
		"nome":"Serviço Easy",
		"dados": "1<sup>GB</sup>",
		"app":"10<sup>€</sup>",
		"cor":"rgb(94,139,244)",
		"preco":"5<sup>.99€</sup>"
	},
	3:{
		"id":3,
		"nome":"Serviço Direct",
		"dados": "2<sup>GB</sup>",
		"app":"15<sup>€</sup>",
		"cor":"rgb(244,28,52)",
		"preco":"8<sup>.50€</sup>"
	}
}

//Not the right way of doing stuff, but the fastest way of making it happen
function loadTariff(){

	/*if(document.getElementsByTagName("body")[0].getAttribute("data-page") === "index2"){

		for(var i = 0; i != document.querySelectorAll(".plan").length; i++){
		var element =  document.querySelectorAll(".plan")[i];
		var obj = tariffs[i+1]
		element.innerHTML += ' <header>' + obj.nome + '</header> <div class="content"> <p> <span class="feature">'+obj.dados +'</span> de dados Móveis</p> <p><span class="feature">'+obj.app+'</span>na app YouCall</p> <h5>Apps sem gastar dados</h5> <h6>Descontos nos serviços Aderentes</h6> </div> <footer> <h6>Por Apenas</h6> <h6><span class="price">'+obj.preco+'</span>p/mes</h6> </footer>';
	}
	}else{*/

		for(var i = 1; i!=document.querySelectorAll(".plan").length + 1;i++){
			var rootElement = document.querySelectorAll(".plan")[i-1]

			rootElement.querySelectorAll(".js-title")[0].innerHTML = tariffs[i].nome;
			rootElement.querySelectorAll(".js-data")[0].innerHTML = tariffs[i].dados;
			rootElement.querySelectorAll(".js-app")[0].innerHTML = tariffs[i].app;
			rootElement.querySelectorAll(".js-price")[0].innerHTML =  tariffs[i].preco;
		}
	//}



	

}

function closePopup(){

	//sessionStorage.setItem("popup",true)
	document.querySelector(".popup").style.opacity = 0;
	document.getElementsByTagName("video")[0].pause();
	document.querySelector(".popup").style.transition = "0.8s opacity ";
	document.getElementsByTagName("body")[0].style.overflow = "visible"
	setTimeout(function(){
		document.getElementsByTagName("body")[0].removeChild(document.querySelector('.popup'))

	}, Number(document.querySelector(".popup").style.transitionDuration.charAt(2)) * 62)


	document.getElementsByTagName("audio")[0].play();
	document.querySelector(".play").classList.remove("fa-play");
	 document.querySelector(".play").classList.add("fa-pause");

}