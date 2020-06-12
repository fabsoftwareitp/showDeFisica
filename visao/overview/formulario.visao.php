<form action="" method="POST" enctype="multipart/form-data">
	<h1>Eventos</h1>

	<div class="div-org">
		<div class="div-input w2">
			<input type="text" name="title" id="title" value="<?=@$evento['title']?>" required>
			<label for="title">Título</label>
		</div>
		<div class="div-input w2">
			<input type="text" name="subtitle" id="subtitle" value="<?=@$evento['subtitle']?>" required>
			<label for="subtitle">Legenda</label>
		</div>
	</div>

	<div class="div-org">
		<div class="div-input w1">
			<input type="text" name="city" id="cidade" value="<?=@$evento['city']?>" required>
			<label for="cidade">Cidade</label>
		</div>
	</div>
	
	<div class="div-org">
		<div class="div-input w1">
			<input type="text" name="local" id="local" value="<?=@$evento['local_show']?>" required>
			<label for="local">Local</label>
		</div>
	</div>

	<div class="div-org">
		<h3>Data</h3>
	</div>

	<div class="div-org">
		<div class="select w1">
			<select class="w3" name="day">
				<option value="default">Dia</option>

				<?php for($dia = 1; $dia <= 31; $dia++):?>
					<option value="<?=$dia?>"><?=$dia?></option>
				<?php endfor;?>
			</select>

			<select class="w3" name="month">
				<option value="default">Mês</option>

				<?php for($mes = 1; $mes <= 12; $mes++):?>
					<option value="<?=$mes?>"><?=$mes?></option>
				<?php endfor;?>
			</select>
		</div>

		<div class="radio">
			<input type="radio" name="year" value="<?=date('Y')?>" id="first" checked>
			<label for="first" id="first"><?=date('Y')?></label>

			<input type="radio" name="year" value="<?=date('Y')+1?>" id="last">
			<label for="last" id="last"><?=date('Y')+1?></label>
		</div>
	</div>

	<div class="div-org">
		<label class="label-image" for="images">Importe o banner</label>
	
		<input type="file" name="images" id="images" hidden>
	
		<div class="image-preview" id="imagePreview">
			<img src="" alt="Image Preview" class="image-preview__image">
			<p class="image-preview__default-text">Prévia do banner</p>
		</div>
	</div>

	<div class="form-navigation">
		<a href="overview/">Cancelar</a>
		<button type="reset">Limpar</button>
		<button type="submit">Concluir</button>
	</div>
</form>