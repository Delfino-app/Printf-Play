<!-- Side navigation -->
<section>
	<div class="sidenav">
		<a class="navbar-brand" id="logoLinkSistemaMenu" href="inside">
	  	 	<span style="font-size:26px">
	  	 		<i class="fa fa-play-circle"></i>
	  	 	</span>
	  	 	PlayNow
	  	</a>
	  	<ul class="nav nav-tabs">
		  <li class="nav-item">
		    <a class="linkSideBar nav-link active" data-toggle="tab" href="#home">
				<i class="fa fa-home"></i> Inicio
			</a>
		  </li>
		  <li class="nav-item">
		    <a class="linkSideBar nav-link" data-toggle="tab" href="#menu1">
				<i class="fa fa-music"></i> Músicas
			</a>
		  </li>
		  <li class="nav-item">
		    <a class="linkSideBar nav-link" href="#">
				<i class="fa fa-list"></i> Albúns
			</a>
		  </li>
		  <li class="nav-item">
			<a class="linkSideBar nav-link" href="#">
				<i class="fa fa-user"></i> Artistas 
			</a>
		  </li>
		  <li class="nav-item">
			<a class="linkSideBar nav-link" href="#">
				<i class="fa fa-heart"></i> Favoritos
			</a>
		  </li>
		  <li class="nav-item">
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
		  </li>
		</ul>
	</div>
</section>
<section>
	<?php
		include "pages/header.php";
	?>
	<div class="container container_pg">
		<!-- Tab panes -->
		<div class="tab-content">
		  	<div class="tab-pane active container fadeIn animated" id="home">
		  		<?php include "pages/inicio.php" ?>
		  	</div>
		  	<div class="tab-pane container fadeIn animated" id="menu1">
		  		<?php include "pages/musicas.php" ?>
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
						<button class="btn musicPlayControls">
							<i class="fa fa-volume-up" style="font-size:16px;margin-top:-10px"></i>
						</button>
						<input type="range" class="teste" name="" style="font-size:10px">
					</div>
				</div>
			</div>
	    </div>
	</footer>
</section>
<script src="App/Controlador/js/sistema/inicio/default.js" type="module"></script>