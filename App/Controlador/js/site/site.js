
import elements from "./siteElementes.js";

export default{


	startSite(){

		//Pegando os elementos
		elements.get.call(this);

		//Pegando as acções dos elementos
		elements.actions.call(this);
	},
	btnSaibaMaisAction(){

		//Animação de Scroll ao clicar no botão Saiba Mais

		$('html,body').animate({scrollTop:$('#sectionMediaInfo').offset().top});
	},
	btnComecarAgoraAction(){

		//Animação de Scroll ao clicar no botão Comecar Agora

		$('html,body').animate({scrollTop:$('#sectionSongs').offset().top});
	},
	submitFrmLogin(e){

		e.preventDefault();

		console.log("ok");
	}
}