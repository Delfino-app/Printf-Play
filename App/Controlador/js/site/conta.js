
import elementes from "./siteElementes.js";
import apiConfig from "../api/apiConfig.js";
import {http} from "../http/http.js";

window.addEventListener("load", function(){


	const conta = {

		startConta(){

			//Get Elements and Actions

			elementes.getCreateConta.call(this);
			elementes.actiosnCreateConta.call(this);
		},
		submitFrmCreateConta(e){

			e.preventDefault();

			const dadosConta = {

				nome: this.nomeConta.value,
				email: this.emailConta.value,
				senha: this.senhaConta.value,
				aceitarTermos: this.aceitarTermosConta.checked
			}

			console.table(dadosConta);
		}
	}

	conta.startConta();

	$(window).on("scroll", function(){

		if($(window).scrollTop() > 80){
			$("#sectionMenuSite").addClass("menuFixed");
		}else{
			$("#sectionMenuSite").removeClass("menuFixed");
		}
	});
});