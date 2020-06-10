<form action="<?=@$acao?>" method="POST" enctype="multipart/form-data">
	<h1>Notícia</h1>

	<div class="div-org">
		<div class="div-input w1">
			<input type="text" name="title" id="titulo" value="<?=@$new['title']?>" required>
			<label for="titulo">Título</label>
		</div>
	</div>

	<div class="div-org">
		<div class="div-input w1">
			<input type="text" name="subtitle" id="legenda" value="<?=@$new['subtitle']?>" required>
			<label for="legenda">Subtítulo</label>
		</div>
	</div>

	<div class="div-org">
		<label class="label-image" for="images">Selecione a capa</label>
	
		<input type="file" name="images" id="images" hidden>
	
		<div class="image-preview" id="imagePreview">
			<?php if(isset($new)): ?>
				<img src="<?=@$new['images']?>" width="auto" height="100%">
			<?php else: ?>
				<img src="" alt="Image Preview" class="image-preview__image">
				<p class="image-preview__default-text">Prévia</p>
			<?php endif; ?>
		</div>
	</div>

	<div class="div-org">
		<h3>Insira o texto da notícia abaixo</h3>
	</div>
	<div class="div-org">
		<textarea name="noticia"><?=@$new['text_notice']?></textarea>

		<script>
			CKEDITOR.replace( 'noticia' );
		</script>
	</div>

	<div class="form-navigation">
		<a href="news/">Cancelar</a>
		<button type="reset">Limpar</button>
		<button type="submit">Concluir</button>
	</div>
</form>

<script src="publico/js/index.js"></script>