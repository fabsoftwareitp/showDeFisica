<?php

    function conn() {

        $cnx = new PDO('sqlite:data.sqlite');
        //$cnx = mysqli_connect("localhost", "dev", "dev123", "showdafisica");
        if (!$cnx) die('Deu errado a conexao!');
        return $cnx;
        
    }

?>