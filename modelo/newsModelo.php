<?php

function pegarTodasNews() {
    $sql = "SELECT * FROM news";
    $resultado = mysqli_query(conn(), $sql);
    $news = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $news[] = $linha;
    }
    return $news;
}

function pegarNewPorId($id) {
    $sql = "SELECT * FROM news WHERE id_news = '$id'";
    $resultado = mysqli_query(conn(), $sql);
    $new = mysqli_fetch_assoc($resultado);
    return $new;
}

function adicionarNew($title, $subtitle, $images) {
    $sql = "INSERT INTO news(title, subtitle, images) 
            VALUES ('$title', '$subtitle', '$images');";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar noticia' . mysqli_error($cnx)); }
    return 'Noticia cadastrada com sucesso!';
}

function editarNew($id, $title, $subtitle, $image) {
    $sql = "UPDATE news SET title = '$title', subtitle = '$subtitle', images = '$image' WHERE id_news = '$id'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar noticia' . mysqli_error($cnx)); }
    return 'Noticia alterado com sucesso!';
}

function deletarNew($id) {
    $sql = "DELETE FROM news WHERE id_news = '$id'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao deletar usuário' . mysqli_error($cnx)); }
    return 'New deletado com sucesso!';
}
