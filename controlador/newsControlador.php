<?php

require_once "modelo/newsModelo.php";

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
        $images = $_POST["images"];
        adicionarNew($title, $subtitle, $images);
        redirecionar("news/index");
    } else {
        exibir("news/formulario");
    }
}

/** admin */
function deletar($id) {
    deletarNew($id);
    redirecionar("news/index");
}

/** admin */
function editar($id) {
    if (ehPost()) {
        $title = $_POST["title"];
        $subtitle = $_POST["subtitle"];
        $image = $_POST["image"];
        editarNew($id, $title, $subtitle,$image);
        redirecionar("news/index");
    } else {
        $dados["news/index"] = pegarNewPorId($id);
        exibir("news/formulario", $dados);
    }
}

/** admin */
function visualizar($id) {
    $dados["new"] = pegarNewPorId($id);
    exibir("news/visualizar", $dados);
}
