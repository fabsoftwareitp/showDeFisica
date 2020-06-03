<?php

require_once "modelo/galleryModelo.php";
require_once "servico/uploadServico.php";

/** anon */
function index(){
	$dados = [];
	$dados['images'] = pegarTodasImagens();
	exibir("galeria/index", $dados);
}

/** admin */
function adicionar(){
	if(ehPost()){
		for($i = 0; $i < count($_FILES['images']); $i++) {

			$name = $_FILES['images']['name'][$i];
			$tmpname = $_FILES['images']['tmp_name'][$i];
			$size = $_FILES['images']['size'][$i];
			$error = $_FILES['images']['error'][$i];
			$type = $_FILES['images']['type'][$i];

			if(verificarImagem($type, $error, $size)){
				$nameImagem = uploadImage($name, $tmpname, $type, 'G');
				adicionarGallery($nameImagem);
			} else {
				continue;
			}
		}

		redirecionar("gallery/");
	}
}

/** admin */
function deletar($id){
	$imagem = pegarImagemPorId($id);
	deletarGallery($id);
	unlink($imagem['path_image']);
	unset($imagem);
	redirecionar("gallery/");
}