<?php
session_start();
include_once('config.php');
// print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)) {
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['email'];

$sql = "SELECT * FROM produtos ORDER BY id DESC";

$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Sistema Conexão Mobile</title>
    <style>
        body {
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color: white;
            text-align: center;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="https://i.pinimg.com/564x/f1/5b/97/f15b971b55bf32e3b553f5c00052125c.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
            Sistema Conexão Mobile
        </a>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger" me-5>Deslogar</a>

        </div>
    </nav>
    <br>
    <?php
    echo "<h1>Bem Vindo <U>$logado</u></h1>";
    ?>

</body>

</html>