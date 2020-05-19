<?php

    function conn() {
        $cnx = mysqli_connect("localhost", "root", "", "showdafisica");
        if (!$cnx) die('Deu errado a conexao!');
        return $cnx;
    }

?>