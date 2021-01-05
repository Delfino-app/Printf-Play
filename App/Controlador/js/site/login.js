
import elementes from "./siteElementes.js";
import apiConfig from "../api/apiConfig.js";
import {http} from "../http/http.js";

window.addEventListener("load", function(){

	const login = {

		startLogin(){

			//Get Elements and Actions
	        elementes.getLogin.call(this);
	        elementes.actionsLogin.call(this);
		},
		submitFrmLogin(e){

			e.preventDefault();

			const dadosLogin = {

				email : this.emailLogin.value,
				senha : this.senhaLogin.value
			}

			window.location.href = "inside";

			//console.table(dadosLogin);
		}
	}

	login.startLogin();

	$(window).on("scroll", function(){

		if($(window).scrollTop() > 100){
			$("#sectionMenuSite").addClass("menuFixed");
		}else{
			$("#sectionMenuSite").removeClass("menuFixed");
		}
	});
});