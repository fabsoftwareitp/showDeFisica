<h1 class="title-form">Notícia</h1>

<form action="<?=@$acao?>" method="POST" enctype="multipart/form-data">
	<div class="normal">
		<input type="text" name="title" id="titulo" value="<?=@$new['title']?>" required>
		<label for="titulo">Título</label>
	</div>

	<div class="normal">
		<input type="text" name="subtitle" id="legenda" value="<?=@$new['subtitle']?>" required>
		<label for="legenda">Subtítulo</label>
	</div>

	<div class="image-form">
		<label class="label-image" for="images">Selecione a capa</label>

		<input type="file" name="images" id="images" hidden required>

		<div class="image-preview" id="imagePreview">
			<?php if(isset($new)): ?>
				<img src="<?=@$new['images']?>" width="auto" height="100%">
			<?php else: ?>
				<img src="" alt="Image Preview" class="image-preview__image">
				<p class="image-preview__default-text">Prévia</p>
			<?php endif; ?>
		</div>
	</div>

	<div class="notice">
		<h3>Insira o texto da notícia abaixo</h3>
		<textarea name="noticia"><?=@$new['text_notice']?></textarea>
	</div>

	<div class="link">
		<a href="./news/">Cancelar</a>
		<button type="reset">Limpar</button>
		<button id="sub" type="submit">Concluir</button>
	</div>
</form>

<script>
	CKEDITOR.replace( 'noticia' );
</script>

<script src="./publico/js/previewImage.js"></script>