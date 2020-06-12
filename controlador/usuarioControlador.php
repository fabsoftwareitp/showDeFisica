<?php

require_once "modelo/usuarioModelo.php";

/** admin */
function index() {
	$dados["usuarios"] = pegarTodosUsuarios();
	exibir("usuario/index", $dados);
}

/** admin */
function adicionar() {
	if (ehPost()) {
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$conf_senha = $_POST["conf-senha"];

		if ($senha == $conf_senha) {
			adicionarUsuario($nome, $email, $senha);
			redirecionar("usuario/");
		} else {
			exibir("usuario/formulario");
		}
	} else {
		exibir("usuario/formulario");
	}
}

/** admin */
function deletar($id) {
	deletarUsuario($id);
	redirecionar("usuario/");
}

/** admin */
function editar($id) {
	if (ehPost()) {
		$nome = $_POST["nome"];
		$email = $_POST["email"];
		$senha = $_POST["senha"];
		$conf_senha = $_POST["conf-senha"];

		if ($senha == $conf_senha) {
			editarUsuario($id, $nome, $email);
			redirecionar("usuario/");
		} else {
			exibir("usuario/formulario");
		}
	} else {
		$dados["usuario"] = pegarUsuarioPorId($id);
		exibir("usuario/formulario", $dados);
	}
}

/** admin */
function visualizar($id) {
	$dados["usuario"] = pegarUsuarioPorId($id);
	exibir("usuario/visualizar", $dados);
}
