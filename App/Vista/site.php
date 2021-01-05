<?php
	include "App/Vista/Site/menuSite.php";
?>
<section id="SectionTop">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4 fadeInLeft animated">
				<h3 class="textDafault" id="txtInfoMusic">
					Uma rede social totalmente diferente
				</h3>
				<p id="txtInfoMusicSobre">
					A maneira mais fácil de ouvir, carregar e partilhar músicas com os seus amigos, em qualquer lugar e a qualquer hora. 
					<br><br>
					Tudo isso e muito mais em uma rede social diferente das que já viu.
				</p>
				<div class="float-left">
					<button class="btn btn-entrarSite" id="btnSaibaMais">
					  	Saiba Mais
					</button>
					<span class="spanSeparete"></span>
					<span id="sectionMediaInfo"></span>
					<button class="btn btn-entrar" id="btnComecarAgora">
						<i class="fa fa-play-circle"></i> Ouvir Agora
					</button>
				</div>
			</div>
			<div class="col-lg-4 fadeInRight animated">
				<img class="imgSite"  src="App/Vista/Imagens/d3.png">
			</div>
		</div>
	</div>
</section>
<section  id="sectionMedia">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4 fadeInLeft animated">
				<img  class="imgSite" src="App/Vista/Imagens/i4.png">
			</div>
			<div class="col-lg-4 fadeInRight animated">
				<h3 class="textDafault" id="txtInfoMusic" style="text-align:right;">
					Partilhe suas melhores músicas com seus amigos
				</h3>
				<p id="txtInfoMusicSobre" style="text-align:right;">
					A maneira mais fácil de ouvir, carregar e partilhar músicas com os seus amigos, em qualquer lugar e a qualquer hora.
					<br><br>
					Possuímos uma biblioteca com mais de <b class="strongNumber">1.345.245</b> músicas carregadas e partilhadas pelos nossos usuários. 
				</p>
			</div>
		</div>
	</div>
</section>
<section  id="sectionMedia2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-4 fadeInRight animated">
				<h3 class="textDafault" id="txtInfoMusic">
					Partilhe suas melhores músicas com seus amigos
				</h3>
				<p id="txtInfoMusicSobre">
					A maneira mais fácil de ouvir, carregar e partilhar músicas com os seus amigos, em qualquer lugar e a qualquer hora.
					<br><br>
					Possuímos uma biblioteca com mais de <b class="strongNumber">1.345.245</b> músicas carregadas e partilhadas pelos nossos usuários. 
				</p>
			</div>
			<div class="col-lg-4 fadeInLeft animated">
				<img  class="imgSite" src="App/Vista/Imagens/about.png">
			</div>
		</div>
	</div>
</section>
<section  id="sectionStartNow">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<h3 class="textDafault" style="text-align:center;">
					Começe Agora
				</h3>
				<p id="txtInfoMusicSobre" style="text-align:center;">
					Vai perder esta oportunidade? Junta-se a nós e seja um de nós!
				</p>
			</div>
			<br>
			<div class="col-lg-12">
				<div class="text-center">
					<a href="entrar" class="btn btn-entrarSite">
					  	Entrar <i class="fa fa-sign-in"></i>
					</a>
					<span class="spanSeparete"></span>
				    <a href="criarConta" class="btn btn-entrar">
				  		Criar Conta <i class="fa fa-plus-circle"></i>
				    </a>
				</div>
			</div>
		</div>
	</div>
</section>
<section  id="sectionSongs">
	<div id="sectionSongsInside">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-3 fadeInLeft animated">
					<div class="card card-media">
					  <img class="imgSongPoster" src="App/Vista/Imagens/music.jpeg" alt="Avatar">
					  <div class="container">
					    <div id="btnMusicLisendContainer">
					    	<button class="btn btnMidia btn-sm btnMidialeft">
					    		<i class="fa fa-angle-left iconMusicLisendSite"></i>
					    	</button>
					    	<button class="btn  btnMidia btn-sm btnMidiacenter">
					    		<i class="fa fa-play"></i>
					    	</button>
					    	<button class="btn btnMidia btn-sm btnMidiaright">
					    		<i class="fa fa-angle-right iconMusicLisendSite"></i>
					    	</button>
					    </div>
					    <h4 class="titleMusicLicendSite">To Die For</h4>
					    <p class="artistMusicLicendSite">Sam Smith</p> 
					  </div>
					</div>
				</div>
				<div class="col-lg-4 fadeInRight animated" style="padding-left:50px">
					<h3 class="textDafault color_zinza" id="txtInfoMusic" style="text-align:right;">
						Milhares de músicas à sua desposição
					</h3>
					<p id="txtInfoMusicSobre" style="text-align:right;color:#d1d1d1">
						A maneira mais fácil de ouvir, carregar e partilhar músicas com os seus amigos, em qualquer lugar e a qualquer hora.
						<br><br>
						Possuímos uma biblioteca com mais de <b class="strongNumber">1.345.245</b> músicas carregadas e partilhadas pelos nossos usuários. 
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
	include "App/Vista/Site/rodapeSite.php";
?>
<script src="App/Controlador/js/site/index.js" type="module"></script>