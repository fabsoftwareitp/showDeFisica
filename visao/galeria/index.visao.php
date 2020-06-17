<p class="title-gallery">Galeria</p>
<?php if(acessoUsuarioEstaLogado()):?>
	<form action="gallery/adicionar" method="post" enctype="multipart/form-data">
		<input type="file" name="images[]" id="images" hidden multiple>

		<div class="div-org">
			<label class="label-image" for="images">Selecione seu arquivo</label>

			<div class="image-preview" id="imagePreview">
				<img src="" alt="Image Preview" class="image-preview__image">
				<p class="image-preview__default-text">Prévia</p>
			</div>
		</div>

		<div class="form-navigation">
			<button type="submit">Adicionar</button>
		</div>
	</form>
<?php endif;?>

<div class="galeria">
	<?php foreach ($images as $image):?>
		<div class="imagem-galeria">
			<?php if(acessoUsuarioEstaLogado()):?>
				<div class="imagem-hover">
					<a href="gallery/deletar/<?=$image['id_image']?>">Deletar</a>
				</div>
			<?php endif;?>

			<img src="<?=$image['path_image']?>">
		</div>
	<?php endforeach;?>
</div>
