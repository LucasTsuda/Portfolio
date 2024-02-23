<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'portfolio-formulario';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno){

    echo "Erro";
}
else {
    echo "Conexao com sucesso";
}

?>