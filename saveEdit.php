<?php

include_once('config.php');

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descrição = $_POST['descrição'];
    $valor = $_POST['valor'];
    $quantidade = $_POST['quantidade'];

    $sqlUpdate = "UPDATE produtos SET nome='$nome',descrição='$descrição',valor='$valor',quantidade='$quantidade' WHERE id='$id'";

    $result = $conexao->query($sqlUpdate);
}
header('Location: sistema.php');
