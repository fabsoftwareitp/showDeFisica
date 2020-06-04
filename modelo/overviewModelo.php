<?php

function adicionarEvento($title, $subtitle, $city, $date_show, $local_show, $banner){
	$cnx = conn();
	$sql = "INSERT INTO diary VALUES(
		NULL,
		'$title',
		'$subtitle',
		'$city',
		'$date_show',
		'$local_show',
		'$banner'
	)";
	$resultado = $cnx->query($sql);
	if(!$resultado) { die('Erro ao adicionar evento'); }
	return 'Evento adicionado com sucesso!';
}

function editarEvento($id, $title, $subtitle, $city, $date_show, $local_show, $banner){
	$cnx = conn();
	$sql = "UPDATE diary SET
		title = '$title',
		subtitle = '$subtitle',
		city = '$city',
		date_show = '$date_show',
		local_show = '$local_show', 
		banner = '$banner' 
	WHERE id_overview = '$id'";
	$resultado = $cnx->query($sql);
	if(!$resultado) { die('Erro ao alterar evento'); }
	return 'Evento alterado com sucesso!';
}

function deletarEvento($id){
	$cnx = conn();
	$sql = "DELETE FROM diary WHERE id_overview = '$id'";
	$resultado = $cnx->query($sql);
	if(!$resultado) { die('Erro ao remover evento'); }
	return 'Evento removido com sucesso!';
}

function visualizarEvento($id){
	$cnx = conn();
	$sql = "SELECT *,DATE(date_show, '%d-%m-%Y') AS date_show  FROM diary WHERE id_overview = '$id'";
	$resultado = $cnx->query($sql);
	foreach($resultado as $col){
        $evento = $col;
    }
	return $evento;
}

function pegarTodosEventos(){
	$cnx = conn();
	$sql = "SELECT *,DATE(date_show, '%d-%m-%Y') AS date_show FROM diary";
	$resultado = $cnx->query($sql);
	$eventos = array();
	if($resultado){
		foreach($resultado as $col){
			$eventos[] = $col;
		}
	}
	return $eventos;
}