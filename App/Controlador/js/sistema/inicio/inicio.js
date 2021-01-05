
import ui from "./ui.js";

export default{

	async start(){

		ui.getDefaultelements.call(this);
		ui.getMenuElements.call(this);

		this.action();

		await this.novidades();
		await this.minhasMusicas();
		await this.publicacoes();
	},
	async novidades(){

		await ui.getNovidadesElements.call(this);

		let dispay = `
			<div class="col-lg-12">
				<h3 class="insideTitle">Novidades</h3>
			</div>
		`;

		for (var i = 0; i < 6; i++) {
			
			dispay += `
				<div class="col-lg-2 containerMusicList">
					<div class="card card-list">
					  <img class="imgMusicList" src="App/Vista/Imagens/music.jpeg" alt="Avatar">
					  <div class="container">
					    	<h4 class="titleMusicList">Título</h4>
					    	<p class="artistMusicList">Artista</p>
					    	<p class="float-left">
				    			<span class="duracaoMusicList">00:00</span>
				    		</p>
				    		<p class="float-right">
				    			<a title="Reproduzir" class="actionMusicList" href="#">
						    		<i class="fa fa-play-circle-o"></i>
						    	</a>
						    	<span class="spanSeparete"></span>
					    		<a title="Adicionar aos favoritos" class="actionMusicList" href="#">
						    		<i class="fa fa-heart-o"></i>
						    	</a>
				    		</p>
				    	</div>
					</div>
				</div>
			`;
		}

		this.displayNovidades.innerHTML = await dispay;
	},
	async minhasMusicas(){

		ui.getMinhasMusicasElements.call(this);

		let dispay = `
			<div class="col-lg-12">
				<h3 class="insideTitle">Minhas Músicas</h3>
			</div>
		`;

		for (var i = 0; i < 12; i++) {
			
			dispay += `
				<div class="col-lg-3">
					<div class="mySongsMusicList">
					  	<div class="col-lg-4 no_padding">
					  		<img class="mySongsImgMusicList" src="App/Vista/Imagens/music.jpeg" alt="Avatar">
					  	</div>
					  	<div class="col-lg-8">
					    	<h4 class="titleMusicList">
					    		Título
					    	</h4>
					    	<p class="artistMusicList">
					    		Artista
					    	</p>
					    	<p class="mySongsActionsMusicList">
					    		<span class="float-left duracaoMusicList">00:00</span>
					    		<span class="float-right">
					    			<a title="Reproduzir" class="actionMusicList" href="#">
							    		<i class="fa fa-play-circle-o"></i>
							    	</a>
							    	<span class="spanSeparete"></span>
						    		<a title="Adicionar aos favoritos" class="actionMusicList" href="#">
							    		<i class="fa fa-heart-o"></i>
							    	</a>
							    	<span class="spanSeparete"></span>
						    		<a title="Adicionar aos favoritos" class="actionMusicList" href="#">
							    		<i class="fa fa-share-alt"></i>
							    	</a>
					    		</span>
					    	</p>
				    	</div>
					</div>
				</div>
			`;
		}

		this.displayMinhasMusicas.innerHTML = await dispay;
	},
	async publicacoes(){

		ui.getPublicacoesElements.call(this);

		let dispay = `
			<div class="col-lg-12">
				<h3 class="insideTitle">Publicações</h3>
			</div>
		`;

		for (var i = 0; i < 3; i++) {
			
			dispay += `
				<div class="col-lg-4">
					<div class="publushContainer container">
						<div class="publishHead">
							<a class="nav-link userPublish" href="#">
					           <img width="20" class="imgUserMenu" src="App/Vista/Imagens/default.jpg" alt="Avatar">
					           <p>User Name</p>
					        </a>
						</div>
						<div class="publishBody">
							<p>
								A maneira mais fácil de ouvir, carregar e partilhar músicas com os seus amigos, em qualquer lugar e a qualquer hora.
								Possuímos uma biblioteca com mais de 1.345.245 músicas carregadas e partilhadas pelos nossos usuários.
								A maneira mais fácil de ouvir, carregar e partilhar músicas com os seus amigos, em qualquer lugar e a qualquer hora...
							</p>
						</div>
						<div class="publishFooter">
							<p class="float-left">
								<a href="#">
									<i class="fa fa-thumbs-o-up"></i>
								</a>
								<span class="spanSeparete"></span>
								<a href="#">
									<i class="fa fa-heart-o"></i>
								</a>
							</p>
							<p class="float-right">
								<a href="#">
									<i class="fa fa-commentss-o"></i>
									Comentários
								</a>
							</p>
						</div>
					</div>
				</div>
			`;
		}

		this.displayPublicacoes.innerHTML = await dispay;
	},
	action(){

		
	}
}