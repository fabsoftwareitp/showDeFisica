<?php

function uploadImage($array_Imagem, $path){
	$type = $array_Imagem["images"]["type"];
	$tmp_name = $array_Imagem["images"]["tmp_name"];
	$size = $array_Imagem["images"]["size"];

	$extension = explode("/", $type);

	if(($extension[1] == 'jpeg') || ($extension[1] == 'jpg') || ($extension[1] == 'png') || ($extension[1] == 'gif')):

		// if($size < 150000):
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

			$name = md5(time()).'.'.$extension[1];
			move_uploaded_file($tmp_name, $diretory.$name);

			return $diretory.$name;
		// else:
			// return false;
		// endif;
	else:
		return false;
	endif;
}
