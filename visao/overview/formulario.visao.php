<h1 class="title-form">Eventos</h1>

<form action="" method="POST" enctype="multipart/form-data" class="over-form">
	<div class="normal">
		<input type="text" name="title" id="title" value="<?=@$evento['title']?>" required>
		<label for="title">Título</label>
	</div>

	<div class="normal">
		<input type="text" name="subtitle" id="subtitle" value="<?=@$evento['subtitle']?>" required>
		<label for="subtitle">Legenda</label>
	</div>

	<div class="normal">
		<input type="text" name="city" id="cidade" value="<?=@$evento['city']?>" required>
		<label for="cidade">Cidade</label>
	</div>

	<div class="normal">
		<input type="text" name="local" id="local" value="<?=@$evento['local_show']?>" required>
		<label for="local">Local</label>
	</div>

	<div class="data-form">
		<h1>Data</h1>

		<?php if(isset($evento)) $data = explode('-',$evento['date_show']);?>

		<div class="select-form">
			<select name="day">
				<option value="default">Dia</option>

				<?php for($dia = 1; $dia <= 31; $dia++):?>
					<?php if(isset($data)):?>
						<?php if($data[2] == $dia):?>
							<option value="<?=$dia?>" selected><?=$dia?></option>
						<?php else:?>
							<option value="<?=$dia?>"><?=$dia?></option>
						<?php endif;?>
					<?php else:?>
						<option value="<?=$dia?>"><?=$dia?></option>
					<?php endif;?>
				<?php endfor;?>
			</select>

			<select name="month">
				<option value="default">Mês</option>

				<?php for($mes = 1; $mes <= 12; $mes++):?>
					<?php if(isset($data)):?>
						<?php if($data[1] == $mes):?>
							<option value="<?=$mes?>" selected><?=$mes?></option>
						<?php else:?>
							<option value="<?=$mes?>"><?=$mes?></option>
						<?php endif;?>
					<?php else:?>
						<option value="<?=$mes?>"><?=$mes?></option>
					<?php endif;?>
				<?php endfor;?>
			</select>
		</div>

		<div class="radio-form">
			<?php if(isset($evento)):?>
				<?php if($data[0] == date('Y')):?>
					<input type="radio" name="year" value="<?=date('Y')?>" id="first" checked>
					<input type="radio" name="year" value="<?=date('Y')+1?>" id="last">
				<?php else:?>
					<input type="radio" name="year" value="<?=date('Y')?>" id="first">
					<input type="radio" name="year" value="<?=date('Y')+1?>" id="last" checked>
				<?php endif;?>
			<?php else:?>
				<input type="radio" name="year" value="<?=date('Y')?>" id="first" checked>
				<input type="radio" name="year" value="<?=date('Y')+1?>" id="last">
			<?php endif;?>

			<label for="first" id="first"><?=date('Y')?></label>
			<label for="last" id="last"><?=date('Y')+1?></label>
		</div>
	</div>

	<div class="image-form">
		<label class="label-image" for="images">Importe o banner</label>
	
		<input type="file" name="images" id="images" hidden>
	
		<div class="image-preview" id="imagePreview">
			<img src="" alt="Image Preview" class="image-preview__image">
			<p class="image-preview__default-text">Prévia do banner</p>
		</div>
	</div>

	<div class="link">
		<a href="./overview/">Cancelar</a>
		<button type="reset">Limpar</button>
		<button id="sub" type="submit">Concluir</button>
	</div>
</form>

<script src="./publico/js/previewImage.js"></script>