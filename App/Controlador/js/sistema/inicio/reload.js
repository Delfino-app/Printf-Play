import ui from "./ui.js";

const reload = {

	async start(){

		await this.novidades();
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
	}
}

reload.start();
