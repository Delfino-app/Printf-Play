<?php

	include "menuSite.php";
?>
<section  class="sectionLoginCriarContaContainer">
	<div class="sectionLoginCriarContaInside">
		<div class="container">
			<div class="row justify-content-center" id="displayLoginCriarConta">
				<div class="col-lg-4 fadeInLeft animated padding_right">
					<div>
						<h3 class="textDafault color_zinza" id="txtInfoMusic">
							Faça login para entrar na sua conta
						</h3>
						<p class="color_zinza" id="txtInfoMusicSobre">
							Insira os seus dados para ter aceder à sua conta. Caso não tenha uma conta, clique em <a href="criarConta" class="linkNovaConta">Criar Conta</a>.
						</p>
					</div>
				</div>
				<div class="col-lg-3 fadeInRight animated card-media" id="loginCriarContaContainer">
					<div>
						<form method="POST" id="frmLogin" class="frmLoginCriarConta">
						  <div class="form-group">
						  	<label class="color_zinza">Email</label>
						    <input type="email" class="form-control" placeholder="Email" id="emailLogin" required>
						  </div>
						  <div class="form-group" style="padding-top:8px">
						  	<label class="color_zinza">Senha</label>
						    <input type="password" class="form-control" placeholder="Senha" id="senhaLogin" autocomplete="false" required>
						  </div>
						  <div class="form-group">
						  	<button type="submit" class="btn btn-entrar btnConta">
							  	Entrar <i class="fa fa-sign-in"></i>
							  </button>
						  </div>
						</form>
						<div class="text-center">
							<p class="frmLoginCriarContaInfoBottom">
								Ainda não tem uma conta?<br>
								<a href="criarConta" class="linkNovaConta"  id="linkNovaConta">Criar Conta</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php

	include "rodapeSite.php";
?>
<script src="App/Controlador/js/site/login.js" type="module"></script>