
export default{

	getDefaultelements(){

		this.displayDefault = document.getElementById('displayPageInicio');
	},
	getMenuElements(){

		this.menuLink = document.querySelector('.linkSideBar');
		this.menuDisplayPalyList = document.querySelector('.PlayListList');
	},
	getNovidadesElements(){

		this.displayNovidades = document.getElementById('displayNovidades');
	},
	getMinhasMusicasElements(){

		this.displayMinhasMusicas = document.getElementById('displayMinhasMusicas');
	},
	getPublicacoesElements(){

		this.displayPublicacoes = document.getElementById('displayPublicacoes');
	}
}