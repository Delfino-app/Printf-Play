
export default{

	get(){

		this.btnSaibaMais = document.querySelector("#btnSaibaMais");
		this.btnComecarAgora = document.querySelector("#btnComecarAgora");
	},
	getLogin(){

		//Frm Login Elements
		this.frmLogin = document.querySelector("#frmLogin");
		this.emailLogin = document.querySelector("#emailLogin");
		this.senhaLogin = document.querySelector("#senhaLogin");
	},
	getCreateConta(){

		//Frm Create Count 
		this.frmCreateConta = document.querySelector("#frmCreateConta");
		this.nomeConta = document.querySelector("#nomeConta");
		this.emailConta = document.querySelector("#emailConta");
		this.senhaConta = document.querySelector("#senhaConta");
		this.aceitarTermosConta = document.querySelector("#aceitarTermosConta");
	},	
	actions(){

		this.btnSaibaMais.onclick = () => this.btnSaibaMaisAction();
		this.btnComecarAgora.onclick = () => this.btnComecarAgoraAction();
	},
	actionsLogin(){

		//frmLogin
		this.frmLogin.onsubmit = (e) => this.submitFrmLogin(e); 
	},
	actiosnCreateConta(){

		//frmConta
		this.frmCreateConta.onsubmit = (e) => this.submitFrmCreateConta(e);
	}
}