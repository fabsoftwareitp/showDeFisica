<?php

    define('ACESSO', true);

    function acessoLogar($usuario) {
        if(!empty($usuario)) {
            $_SESSION["acesso"] = array(
                "email" => $usuario["email_user"], 
                "papel" => "admin"
            );
            return true; 
        }
        return false;
    }

    function acessoDeslogar() {
        if (isset($_SESSION["acesso"])) {
            $_SESSION["acesso"] = null;
            unset($_SESSION["acesso"]);
        }
    }

    function acessoUsuarioEstaLogado() {
        return isset($_SESSION["acesso"]);
    }

    function acessoPegarPapelDoUsuario() {
        if (acessoUsuarioEstaLogado()) {
            return $_SESSION["acesso"]["papel"];
        }
    }

    function acessoPegarUsuarioLogado() {
        if (acessoUsuarioEstaLogado()) {
            return $_SESSION["acesso"]["email"];
        }   
    }
