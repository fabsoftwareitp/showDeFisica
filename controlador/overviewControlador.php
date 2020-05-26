<?php

require_once 'modelo/overviewModelo.php';
require_once 'servico/uploadServico.php';

function index(){
	$dados['eventos'] = pegarTodosEventos();
	exibir("overview/index", $dados);
}

function adicionar(){
	if (ehPost()) {
		$title = $_POST['title'];
		$subtitle = $_POST['subtitle'];
		$city = $_POST['city'];
		$local = $_POST['local'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$image = uploadImage($_FILES, "B");

		$data = $year.'-'.$month.'-'.$day;
		adicionarEvento($title, $subtitle, $city, $data, $local, $image);
		redirecionar("overview/");
	} else {
		exibir("overview/formulario");
	}
}

function editar($id){
	if (ehPost()){
		$title = $_POST['title'];
		$subtitle = $_POST['subtitle'];
		$city = $_POST['city'];
		$local = $_POST['local'];
		$day = $_POST['day'];
		$month = $_POST['month'];
		$year = $_POST['year'];
		$image = uploadImage($_FILES, "B");

		$data = $year.'-'.$month.'-'.$day;
		editarEvento($id, $title, $subtitle, $city, $data, $local, $image);
		redirecionar("overview/");
	}else{
		$dados['evento'] = visualizarEvento($id);
		exibir("overview/formulario", $dados);
	}
}

function deletar($id){
	$evento = visualizarEvento($id);
	unlink($evento['banner']);
	deletarEvento($id);
	unset($evento);
	redirecionar("overview/");
}

function visualizar($id){
	$dados['evento'] = visualizarEvento($id);
	exibir("overview/visualizar", $dados);
}