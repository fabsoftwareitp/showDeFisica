<?php

require_once "modelo/usuarioModelo.php";
require_once "biblioteca/acesso.php";

/** anon */
function index() {
    if (ehPost()) {
        extract($_POST);
        $usuario = pegarUsuarioPorEmailSenha($email, $senha);
        if (acessoLogar($usuario)) {
            echo "<script> alert('Bem vindo '.$login)</script>";
            redirecionar("usuario");
        } else {
            echo "<script> alert('usuario ou senha invalidos!')</script>";
        }
    }
    exibir("login/index");
}

/** anon */
function logout() {
    acessoDeslogar();
    echo "<script> alert('deslogado com sucesso!')</script>";
    redirecionar("usuario");
}

?>