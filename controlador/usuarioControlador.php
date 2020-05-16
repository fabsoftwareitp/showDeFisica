<?php

require_once "modelo/usuarioModelo.php";

/** admin */
function index() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/listar", $dados);
}
/** admin */
function adicionar() {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        adicionarUsuario($nome, $email, $senha);
        redirecionar("usuario/index");
    } else {
        exibir("usuario/formulario");
    }
}
/** admin */
function deletar($id) {
    deletarUsuario($id);
    redirecionar("usuario/index");
}
/** admin */
function editar($id) {
    if (ehPost()) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        editarUsuario($id, $nome, $email);
        redirecionar("usuario/index");
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
