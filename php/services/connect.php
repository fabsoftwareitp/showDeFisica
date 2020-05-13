<?php

	function connect(){
		$conn = mysqli_connect('localhost', 'root', '', 'showdafisica');

		if (!$conn) {
			die('Invalid connection');
		}
		return $conn;
		// var_dump($conn);
	}

?>