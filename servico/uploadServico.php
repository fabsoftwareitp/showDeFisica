<?php

function verificarImagem($type, $error, $size){

	if(($type == 'image/jpeg') || ($type == 'image/png') || ($type == 'image/gif')){
		if($error = 0){
			// não sei como calcula esse tamanho, se alguém souber, pode colocar aqui
			if($size < 1000000000){
				return true;
			} else { return "Imagem muito grande."; }
		} else { return "A imagem apresenta erros de upload."; }
	} else { return "Extensão não permitida."; }

}

function uploadImage($nome, $tmp_name, $type, $path){

	$diretory = 'publico/img/';

	switch ($path) {
		case 'B':
			$diretory .= 'banner/';
			break;
		case 'G':
			$diretory .= 'gallery/';
			break;
		case 'N':
			$diretory .= 'news/';
			break;
	}

	$extension = explode("/", $type);

	$name = $diretory.md5($nome).md5(time()).'.'.$extension[1];

	move_uploaded_file($tmp_name, $name);

	return $name;
}
