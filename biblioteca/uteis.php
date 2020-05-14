<?php

function ehPost() {
    return $_SERVER["REQUEST_METHOD"] == "POST";
}

//funcao Mostre e Morra (Die and Dump) para Depuração do código
function mm($valor) { 
    echo "<pre>";
    print_r($valor);
    echo "</pre>";
    die();
}