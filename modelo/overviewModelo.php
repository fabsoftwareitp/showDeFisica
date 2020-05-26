<?php

function adicionarEvento($title, $subtitle, $city, $date_show, $local_show, $banner){
	$sql = "INSERT INTO diary VALUES(
		NULL,
		'$title',
		'$subtitle',
		'$city',
		'$date_show',
		'$local_show',
		'$banner'
	)";
	echo $sql;
	$resultado = mysqli_query($cnx = conn(), $sql);
	if(!$resultado) { die('Erro ao adicionar evento' . mysqli_error($cnx)); }
	return 'Evento adicionado com sucesso!';
}

function editarEvento($id, $title, $subtitle, $city, $date_show, $local_show, $banner){
	$sql = "UPDATE diary SET
		title = '$title',
		subtitle = '$subtitle',
		city = '$city',
		date_show = '$date_show',
		local_show = '$local_show', 
		banner = '$banner' 
	WHERE id_overview = '$id'";

	$resultado = mysqli_query($cnx = conn(), $sql);
	if(!$resultado) { die('Erro ao alterar evento' . mysqli_error($cnx)); }
	return 'Evento alterado com sucesso!';
}

function deletarEvento($id){
	$sql = "DELETE FROM diary WHERE id_overview = '$id'";
	$resultado = mysqli_query($cnx = conn(), $sql);
	if(!$resultado) { die('Erro ao remover evento' . mysqli_error($cnx)); }
	return 'Evento removido com sucesso!';
}

function visualizarEvento($id){
	$sql = "SELECT *,DATE_FORMAT(date_show, '%d-%m-%Y') AS date_show  FROM diary WHERE id_overview = '$id'";
	$resultado = mysqli_query(conn(), $sql);
	$evento = mysqli_fetch_assoc($resultado);
	return $evento;
}

function pegarTodosEventos(){
	$sql = "SELECT *,DATE_FORMAT(date_show, '%d-%m-%Y') AS date_show FROM diary";
	$resultado = mysqli_query(conn(), $sql);
	$eventos = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$eventos[] = $linha;
	}
	return $eventos;
}