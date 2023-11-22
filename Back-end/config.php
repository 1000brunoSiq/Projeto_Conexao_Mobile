<?php

//$DBHost = 'https://conexaomobile.000webhostapp.com/';
$DBHost = 'localhost';
$DBUsername = 'root';
$DBPassword = '';
// $DBName = ' id21482081_databaseconmobile';
$DBName = '_databasecm_';

$conexao = new mysqli($DBHost, $DBUsername, $DBPassword, $DBName);

// if ($conexao->connect_errno) {
//     echo "Erro";
// } else {
//     echo "Conexão efetuada com sucesso!!!";
// }
