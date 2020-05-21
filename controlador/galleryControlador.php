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
	if(ehPost()):
		$images = uploadImage($_FILES, "G");
		adicionarGallery($images);
		redirecionar("gallery/");
	endif;
}

/** admin */
function deletar($id){
	$imagem = pegarImagemPorId($id);
	deletarGallery($id);
	unlink($imagem['path_image']);
	unset($imagem);
	redirecionar("gallery/");
}