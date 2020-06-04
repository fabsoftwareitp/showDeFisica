<?php

function pegarTodasImagens() {
	$cnx = conn();
	$sql = "SELECT * FROM gallery";
	$resultado = $cnx->query($sql);
	$galeria = array();
	if($resultado){
        foreach($resultado as $colum){
            $galeria[] = $colum;
        }
	}
	return $galeria;
}

function adicionarGallery($imagem) {
	$cnx = conn();
	$sql = "INSERT INTO gallery(path_image) 
			VALUES ('$imagem')";
	$resultado = $cnx->query($sql);
	if(!$resultado) { die('Erro ao inserir imagem'); }
	return 'Imagem inserida com sucesso!';
}

function deletarGallery($id) {
	$cnx = conn();
	$sql = "DELETE FROM gallery WHERE id_image = '$id'";
	$resultado = $cnx->query($sql);
	if(!$resultado) { die('Erro ao deletar imagem'); }
	return 'Imagem deletada com sucesso!';
}

function deletargaleriatoda() {
	$cnx = conn();
	$sql = "DELETE FROM gallery";
	$resultado = $cnx->query($sql);
	if(!$resultado) { die('Erro ao deletar imagem'); }
	return 'Imagem deletada com sucesso!';
}

function pegarImagemPorId($id){
	$cnx = conn();
	$sql = "SELECT * FROM gallery WHERE id_image = '$id'";
	$resultado = $cnx->query($sql);
	foreach($resultado as $col){
        $imagem = $col;
	}
	return $imagem;
}