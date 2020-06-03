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
		$text = $_POST['noticia'];

		$nome = $_FILES['images']['name'];
		$tmp_name = $_FILES['images']['tmp_name'];
		$type = $_FILES['images']['type'];
		$image = uploadImage($nome, $tmp_name, $type, 'N');

		adicionarNew($title, $subtitle, $image, $text);
		redirecionar("news/");
	} else {
		exibir("news/formulario");
	}
}

/** admin */
function deletar($id) {
	$new = pegarNewPorId($id);
	unlink($new['images']);
	deletarNew($id);
	redirecionar("news/");
}

/** admin */
function editar($id) {
	if (ehPost()) {
		$title = $_POST["title"];
		$subtitle = $_POST["subtitle"];
		$text = $_POST['noticia'];

		$nome = $_FILES['images']['name'];
		$tmp_name = $_FILES['images']['tmp_name'];
		$type = $_FILES['images']['type'];
		$image = uploadImage($nome, $tmp_name, $type, 'N');
	
		editarNew($id, $title, $subtitle,$image, $text);
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
