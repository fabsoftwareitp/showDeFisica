<?php

	function conn() {

		$cnx = new SQLite3('data.sqlite');
		if (!$cnx) die('Deu errado a conexao!');
		return $cnx;
	}

?>