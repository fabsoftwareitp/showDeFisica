<?php

function pegarTodosUsuarios() {
	$cnx = conn();
	$sql = "SELECT * FROM user";
	$resultado = $cnx->query($sql);
	$usuarios = array();
	while ($col = $resultado -> fetchArray(SQLITE3_ASSOC)){
		$usuarios[] = $col;
	}
	return $usuarios;
}

function pegarUsuarioPorId($id) {
	$cnx = conn();
	$sql = "SELECT * FROM user WHERE id_user = '$id'";
	$resultado = $cnx->query($sql);
	while ($col = $resultado -> fetchArray(SQLITE3_ASSOC)){
		$usuario = $col;
	}
	return $usuario;
}

function adicionarUsuario($nome, $email, $senha) {
	$cnx = conn();
	$sql = "INSERT INTO user(name_user, email_user, password_user) 
			VALUES ('$nome', '$email', '$senha')";
	$resultado = $cnx->query($sql);
	if(!$resultado) { die('Erro ao cadastrar usuário'); }
	return 'Usuario cadastrado com sucesso!';
}

function editarUsuario($id, $nome, $email) {
	$cnx = conn();
	$sql = "UPDATE user SET name_user = '$nome', email_user = '$email' WHERE id_user = $id";
	$resultado = $cnx->query($sql);
	if(!$resultado) { die('Erro ao alterar usuário'); }
	return 'Usuário alterado com sucesso!';
}

function deletarUsuario($id) {
	$cnx = conn();
	$sql = "DELETE FROM user WHERE id_user = $id";
	$resultado = $cnx->query($sql);
	if(!$resultado) { die('Erro ao deletar usuário'); }
	if($_SESSION['acesso']['id'] == $id){
		redirecionar('login/logout');
	}
	return 'Usuario deletado com sucesso!';
			
}

function pegarUsuarioPorEmailSenha($email, $senha) {
	$cnx = conn();
	$sql = "SELECT * FROM user WHERE email_user = '$email' and password_user = '$senha'";
	$resultado = $cnx->query($sql);
	while ($col = $resultado -> fetchArray(SQLITE3_ASSOC)){
		$usuario = $col;
	}
	return $usuario;
}