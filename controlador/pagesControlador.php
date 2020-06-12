<?php

require_once 'modelo/newsModelo.php';
require_once 'modelo/overviewModelo.php';

/** anon */
function index(){
	$dados['news'] = pegarTodasNews();
	$dados['events'] = pegarTodosEventos();
	exibir("paginas/index", $dados);
}

/** anon */
function about() {
	exibir("paginas/about");
}

/** admin */
function dashboard() {
	exibir("paginas/dashboard");
}

/** anon */
function contact() {
	if(ehPost()):
		$remetente = $_POST["nome"];
		$endereco = $_POST["email"];
		$interesse = $_POST["interesse"];
		$mensagem = $_POST["mensagem"];
		
		echo $remetente."<br>".$endereco."<br>".$mensagem."<br>".$interesse;
	else:
		exibir("paginas/contact");
	endif;
}