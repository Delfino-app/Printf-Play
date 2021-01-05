
<?php

	include "menuSite.php";
?>
<section  class="sectionLoginCriarContaContainer">
	<div class="sectionLoginCriarContaInside">
		<div class="container">
			<div class="row justify-content-center" id="displayLoginCriarConta">
				<div class="col-lg-4 fadeInLeft animated padding_right">
					<div class="left-20">
						<h3 class="textDafault color_zinza" id="txtInfoMusic">
							Crie a sua conta, é grátis
						</h3>
						<p class="color_zinza" id="txtInfoMusicSobre">
							Crie a sua conta, faça login e disfrute o que temos preparado para si. Aproveite e convide seus amigos a fazerem o mesmo.
							<br>
							Junte-se aos nossos <b class="strongNumber">1.345.245</b> usuários. Seja um de nós. 
						</p>
						<hr>
						<p class="frmLoginCriarContaInfoBottom float-right" style="font-size:14px;">
							Para maior segurança, a sua Senha deve ter 8 caracteres, incluíndo uma letra maíuscula, um número e um símbolo.<br>
							Ex.: @1Angola
						</p>
					</div>
				</div>
				<div class="col-lg-3 fadeInRight animated card-media" id="loginCriarContaContainer">
					<div>
						<form  id="frmCreateConta" class="frmLoginCriarConta">
							<div class="row">
								<div class="col-lg-12 form-group">
									<label class="color_zinza">Nome</label>
								    <input type="text" class="form-control" placeholder="Nome" id="nomeConta" required>
								</div>
								<div class="col-lg-12 form-group">
									<label class="color_zinza">Email</label>
								    <input type="email" class="form-control" placeholder="Email" id="emailConta"  required>
								</div>
								<div class="col-lg-12 form-group">
									<label class="color_zinza">Senha</label>
								    <input type="password" class="form-control" placeholder="Senha"  id="senhaConta" 
								    required>
								</div>
								<div class="col-lg-12 form-group text-center">
									<label class="form-check-label frmLoginCriarContaInfoBottom">
								      <input class="form-check-input" type="checkbox" id="aceitarTermosConta" required>
								      Aceito os termos
								    </label><br>
								    <button type="submit" class="btn btn-entrar btnConta">
								  		Criar Conta <i class="fa fa-plus-circle"></i>
								    </button>
								</div>
							</div>
						</form>
						<div class="text-center">
							<p class="frmLoginCriarContaInfoBottom">
								Já tem uma conta?<br>
								<a href="entrar" class="linkNovaConta" id="linkLogin">
									Entrar
								</a>
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
<script src="App/Controlador/js/site/conta.js" type="module"></script>
