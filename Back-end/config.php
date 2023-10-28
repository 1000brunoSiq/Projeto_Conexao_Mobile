<?php

$DBHost = 'localhost';
$DBUsername = 'root';
$DBPassword = '';
$DBName = 'conexaomobile';

$conexao = new mysqli($DBHost, $DBUsername, $DBPassword, $DBName);

// if ($conexao->connect_errno) {
//     echo "Erro";
// } else {
//     echo "Conexão efetuada com sucesso!!!";
// }
