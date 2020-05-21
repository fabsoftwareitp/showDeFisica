<?php

function pegarTodasImagens() {
	$sql = "SELECT * FROM gallery";
	$resultado = mysqli_query(conn(), $sql);
	$news = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$news[] = $linha;
	}
	return $news;
}

function adicionarGallery($imagem) {
	$sql = "INSERT INTO gallery(path_image) 
			VALUES ('$imagem');";
	$resultado = mysqli_query($cnx = conn(), $sql);
	if(!$resultado) { die('Erro ao inserir imagem' . mysqli_error($cnx)); }
	return 'Imagem inserida com sucesso!';
}

function deletarGallery($id) {
	$sql = "DELETE FROM gallery WHERE id_image = '$id'";
	$resultado = mysqli_query($cnx = conn(), $sql);
	if(!$resultado) { die('Erro ao deletar imagem' . mysqli_error($cnx)); }
	return 'Imagem deletada com sucesso!';
}

function pegarImagemPorId($id){
	$sql = "SELECT * FROM gallery WHERE id_image = '$id'";
	$resultado = mysqli_query(conn(), $sql);
	$imagem = mysqli_fetch_assoc($resultado);
	return $imagem;
}