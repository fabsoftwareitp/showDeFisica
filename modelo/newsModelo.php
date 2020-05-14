<?php

    function add_News(){
        $sql_query = 'INSERT INTO news VALUES()';
        $final = mysqli_query(conn(), $sql_query);
        if(!$resul){
            die('Erro ao cadastrar sua notícia. Erro: '.mysqli_error(conn()));
        }
        return true;
    }

    function vzl_News(){}

    function edt_News(){}

    function del_News(){}