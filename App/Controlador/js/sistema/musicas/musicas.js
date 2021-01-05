import ui from "./ui.js";

export default{

	async start(){

		await ui.getDefaultelements.call(this);

		await this.displayMusicas();
	},
	async displayMusicas(){

		let dispay = `
			<table class="table table-hover table-music">
			    <thead>
			      <tr>
			      	<th></th>
			        <th>Título</th>
			        <th>Artista</th>
			        <th>Albúm</th>
			        <th>Acção</th>
			      </tr>
			    </thead>
			    <tbody>
		`;

		for (var i = 0; i < 12; i++){
			
			dispay += `
		      <tr>
		      	<td>
		      		<img class="imgMusicListTable" src="App/Vista/Imagens/music.jpeg" alt="titulo">
		      	</td>
		      	<td class="td-extend">Título da Música</td>
		        <td class="td-extend">Artista</td>
		        <td class="td-extend">Albúm</td>
		        <td class="td-extend">
		        	<a title="Reproduzir" class="actionMusicListTable" href="#">
			    		<i class="fa fa-play-circle-o"></i>
			    	</a>
			    	<span class="spanSeparete"></span>
		    		<a title="Adicionar à lista de reprodução" class="actionMusicListTable" href="#">
			    		<i class="fa fa-plus-circle"></i>
			    	</a>
			    	<span class="spanSeparete"></span>
		    		<a title="Partilhar" class="actionMusicListTable" href="#">
			    		<i class="fa fa-share-alt"></i>
			    	</a>
			    	<span class="spanSeparete"></span>
		    		<a title="Adicionar aos favoritos" class="actionMusicListTable" href="#">
			    		<i class="fa fa-heart-o"></i>
			    	</a>
		        </td>
		      </tr>
			`;
		}
		dispay += `
				</tbody>
			</table>
		`;

		this.displayDefault.innerHTML = await dispay;
	}
}