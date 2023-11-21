<?php

$DBHost = 'https://conexaomobile.000webhostapp.com/';
$DBUsername = 'root';
$DBPassword = '';
$DBName = '_databasecm_';

$conexao = new mysqli($DBHost, $DBUsername, $DBPassword, $DBName);

// if ($conexao->connect_errno) {
//     echo "Erro";
// } else {
//     echo "Conexão efetuada com sucesso!!!";
// }
