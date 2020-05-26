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
		$text = $_POST['noticia'];

		adicionarNew($title, $subtitle, $images, $text);
		redirecionar("news/");
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
	redirecionar("news/");
}

/** admin */
function editar($id) {
	if (ehPost()) {
		$title = $_POST["title"];
		$subtitle = $_POST["subtitle"];
		$images = uploadImage($_FILES, "N");
		$text = $_POST['noticia'];

		editarNew($id, $title, $subtitle,$images, $text);
		redirecionar("news/");
	} else {
		$dados["new"] = pegarNewPorId($id);
		exibir("news/formulario", $dados);
	}
}

/** anon */
function visualizar($id) {
	$dados["new"] = pegarNewPorId($id);
	exibir("news/visualizar", $dados);
}
