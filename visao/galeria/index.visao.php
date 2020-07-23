<p class="title-gallery">Galeria</p>

<?php if(acessoUsuarioEstaLogado()):?>
	<form action="gallery/adicionar" method="post" enctype="multipart/form-data">
		<div class="image-form">
			<label class="label-image" for="images">Imagens</label>

			<input type="file" name="images[]" id="images" hidden multiple required>

			<div class="image-preview" id="imagePreview">
				<img src="" alt="Image Preview" class="image-preview__image">
				<p class="image-preview__default-text">Prévia</p>
			</div>
		</div>

		<div class="link">
			<button id="sub" type="submit">Adicionar</button>
		</div>
	</form>
<?php endif;?>

<?php if(count($images) > 0): ?>
	<div class="galeria">
		<?php foreach ($images as $image):?>
			<div class="imagem-galeria">
				<?php if(acessoUsuarioEstaLogado()):?>
					<div class="imagem-hover">
						<a href="./gallery/deletar/<?=$image['id_image']?>">Deletar</a>
					</div>
				<?php endif;?>

				<img src="<?=$image['path_image']?>">
			</div>
		<?php endforeach;?>
	</div>
<?php else:?>
	<h3 class="empty">Não há nada por aqui :(</h3>
<?php endif;?>

<script src="publico/js/previewImage.js"></script>