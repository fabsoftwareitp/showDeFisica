<?php

function pegarTodasNews() {
	$cnx = conn();
	$sql = "SELECT * FROM news";
	$resultado = $cnx->query($sql);
	$news = array();
	if($resultado){
		while ($col = $resultado -> fetchArray(SQLITE3_ASSOC)){
			$news[] = $col;
		}
	}
	return $news;
}

function pegarNewPorId($id) {
	$cnx = conn();
	$sql = "SELECT * FROM news WHERE id_news = '$id'";
	$resultado = $cnx->query($sql);
	while ($col = $resultado -> fetchArray(SQLITE3_ASSOC)){
		$new = $col;
	}
	return $new;
}

function adicionarNew($title, $subtitle, $images, $text) {
	$cnx = conn();
	$sql = "INSERT INTO news(title, subtitle, images, text_notice) 
			VALUES ('$title', '$subtitle', '$images', '$text')";
	$resultado = $cnx->query($sql);
	if(!$resultado) { die('Erro ao cadastrar noticia'); }
	return 'Noticia cadastrada com sucesso!';
}

function editarNew($id, $title, $subtitle, $image, $text) {
	$cnx = conn();
	$sql = "UPDATE news SET 
		title = '$title', 
		subtitle = '$subtitle', 
		images = '$image',
		text_notice = '$text' 
		WHERE id_news = '$id'";
	$resultado = $cnx->query($sql);
	if(!$resultado) { die('Erro ao alterar noticia'); }
	return 'Noticia alterado com sucesso!';
}

function deletarNew($id) {
	$cnx = conn();
	$sql = "DELETE FROM news WHERE id_news = '$id'";
	$resultado = $cnx->query($sql);
	if(!$resultado) { die('Erro ao deletar usuário'); }
	return 'New deletado com sucesso!';
}
