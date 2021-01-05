<!-- Side navigation -->
<section>
	<div class="sidenav">
		<a class="navbar-brand" id="logoLinkSistemaMenu" href="inside">
	  	 	<span style="font-size:26px">
	  	 		<i class="fa fa-play-circle"></i>
	  	 	</span>
	  	 	PlayNow
	  	</a>
		<a class="linkSideBar active" href="#" ref="App/Vista/Sistema/pages/inicio.php">
			<i class="fa fa-home"></i> Inicio
		</a>
		<a class="linkSideBar" href="#" ref="App/Vista/Sistema/pages/musicas.php">
			<i class="fa fa-music"></i> Músicas
		</a>
		<a class="linkSideBar" href="#">
			<i class="fa fa-list"></i> Albúns
		</a>
		<a class="linkSideBar" href="#">
			<i class="fa fa-user"></i> Artistas 
		</a>
		<a class="linkSideBar" href="#">
			<i class="fa fa-heart"></i> Favoritos
		</a>
		<a class="linkSideBar" href="#" data-toggle="collapse" data-target="#demo">
			<i class="fa fa-headphones"></i>
			PlayList
			<i class="fa fa-angle-down float-right"></i>
		</a>
		<div id="demo" class="collapse">
			<ul class="PlayListList">
				<li>
					<a href="#">List 1</a>
				</li>
				<li>
					<a href="#">List 2</a>
				</li>
				<li>
					<a href="#">List 3</a>
				</li>
				<li>
					<a href="#">List 4</a>
				</li>
			</ul>
		</div>
	</div>
</section>
<section>
	<div class="container container_pg">
		<div class="row">

			<!--Pesquisa-->
			<div class="col-lg-4 paddingBottom_20">
				<form id="frmPesquisaInicio" method="post">
					<input type="text" id="txtPesquisaValue" name="pesquisaInicio" placeholder="Pesquisar músicas, artistas...">
					<button class="btn" id="btnPesquisar">
						<i class="fa fa-search" style="font-size:14px"></i>
					</button>
				</form>
			</div>

			<!--User Info-->
			<div class="col-lg-8 paddingBottom_20">
				<ul class="float-right" style="list-style-type:none;">
					<li class="nav-item dropdown" id="imgUserMenuContainer">
				        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="linkUserInfo">
				           <img width="20" class="imgUserMenu" src="App/Vista/Imagens/dev.jpg" alt="Avatar">
				           Delfino
				        </a>
				        <div class="dropdown-menu">
						    <a class="dropdown-item" href="#">Link 1</a>
						    <a class="dropdown-item" href="#">Link 2</a>
						    <a class="dropdown-item" href="#">Link 3</a>
					 	</div>
				    </li>
			    </ul>
			</div>
			<div class="col-lg-12 no_padding" id="displayPageInicio">
				<!--Destaques-->
				<?php include "destaques.php"?>

				<!--Minhas Músicas-->
				<?php include "minhasMusicas.php"?>

				<!--Publicações-->
				<?php include "publicacoes.php"?>
			</div>
		</div>
	</div>
</section>
<section  id="sectionFoterInside">
	<footer>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-3">
					<div style="display: inline-flex;margin-top:10px">
						<div>
							<img width="50" src="App/Vista/Imagens/music.jpeg" alt="Avatar">
						</div>
						<div>
							<h4 class="musicPlayTitle">Título</h4>
					    	<p class="musicPlayArtista">Artista</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 justify-content-center">
					<div class="text-center" style="margin-top:-10px">
						<button class="btn musicPlayControls previus-next">
							<i class="fa fa-angle-left"></i>
						</button>
						<button class="btn musicPlayControls play">
							<i class="fa fa-play-circle-o"></i>
						</button>
						<button class="btn musicPlayControls previus-next">
							<i class="fa fa-angle-right"></i>
						</button>
					</div>
				</div>
				<div class="col-lg-3">
					<div style="display: inline-flex;margin-top:10px">
						<!--<button class="btn musicPlayControls">
							<i class="fa fa-volume-up" style="font-size:16px"></i>
						</button>
						<input type="range" name="" style="font-size:10px">-->
					</div>
				</div>
			</div>
	    </div>
	</footer>
</section>
<script src="App/Controlador/js/sistema/inicio/index.js" type="module"></script>
