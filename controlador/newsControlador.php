<?php

require_once "modelo/newsModelo.php";
require_once "servico/uploadServico.php";

/** admin */
function index(){
	$dados["news"] = pegarTodasNews();
	exibir("news/listar", $dados);
}

/** admin */
function adicionar() {
	if (ehPost()) {
		$title = $_POST["title"];
		$subtitle = $_POST["subtitle"];
		$images = uploadImage($_FILES, "N");
		adicionarNew($title, $subtitle, $images);
		redirecionar("news/index");
	} else {
		exibir("news/formulario");
	}
}

/** admin */
function deletar($id) {
	$new = pegarNewPorId($id);
	unlink($new['images']);
	unset($new);
	deletarNew($id);
	redirecionar("news/index");
}

/** admin */
function editar($id) {
	if (ehPost()) {
		$title = $_POST["title"];
		$subtitle = $_POST["subtitle"];
		$images = uploadImage($_FILES, "N");
		editarNew($id, $title, $subtitle,$images);
		redirecionar("news/index");
	} else {
		$dados["news"] = pegarNewPorId($id);
		exibir("news/formulario", $dados);
	}
}

/** anon */
function visualizar($id) {
	// esse arquivo é um teste por enquanto, ele será substituído pelo texto da notícia
	$local = './controlador/lorem.docx';
	$file = fopen($local,'r');

	$texto_coletado = [];

	while(!feof($file)){
		$texto_coletado[] = fgets($file);
	}
	fclose($file);

	$dados["text"] = $texto_coletado;

	$dados["new"] = pegarNewPorId($id);
	exibir("news/visualizar", $dados);
}
