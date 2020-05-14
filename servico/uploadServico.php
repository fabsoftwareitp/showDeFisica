<?php

	function uploadImage($name, $tmpname, $path){
		$extension = strtolower(substr($name, -4));

		if(($extension == '.jpg') || ($extension == '.png') || ($extension == '.gif')):

			$diretory = './img/';

			if ($path == 'G'):
				$diretory .= 'gallery/';
			else:
				$diretory .= 'news/';
			endif;

			$name = md5(time()).$extension;
			move_uploaded_file($tmpname, $diretory.$name);

			echo $diretory.$name;
		else:
			return false;
		endif;
	}
