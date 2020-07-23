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
function deletarGaleria(){
	$galeria = pegarTodasImagens();

	foreach($galeria as $imagem){
		unlink($imagem['path_image']);
	}

	deletargaleriatoda();
	redirecionar('gallery/');
}

/** admin */
function adicionar(){
	if(ehPost()){

		$i= 0;

		$limite = count($_FILES['images']['name']);

		while($i < $limite){

			$name = $_FILES['images']['name'][$i];
			$tmpname = $_FILES['images']['tmp_name'][$i];
			$type = $_FILES['images']['type'][$i];
			// $error = $_FILES['images']['error'][$i];

			$enderecoImagem = uploadImage($name, $tmpname, $type, 'G');
			adicionarGallery($enderecoImagem);

			$i++;
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