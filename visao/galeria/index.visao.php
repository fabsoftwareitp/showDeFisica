<h1>GALERIA</h1>
<?php if(acessoUsuarioEstaLogado()):?>
	<form action="gallery/adicionar" method="post" enctype="multipart/form-data">

		<label for="imagem-galeria">Adicionar uma imagem</label>
		<input type="file" name="images" id="imagem-galeria">

		<button type="submit">Adicionar</button>
	</form>
<?php endif;?>
<div class="galeria">
	<?php foreach ($images as $image):?>
		<div class="imagem-galeria">
			<img width="30%" src="<?=$image['path_image']?>" alt="">

			<?php if(acessoUsuarioEstaLogado()):?>
				<div class="imagem-hover">
					<a href="gallery/deletar/<?=$image['id_image']?>">deletar</a>
				</div>
			<?php endif;?>
		</div>
	<?php endforeach;?>
</div>