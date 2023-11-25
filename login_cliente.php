<?php
include ('config.php');

session_start();
if (empty($_POST) || empty($_POST["email"]) || empty($_POST["senha"])) {

    header('Location: cadastro.php?erro=Campos email e senha são obrigatórios!');
    exit;
}

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios
        WHERE usuario = '{$email}' AND senha = '{$senha}'";

$res = $conexao->query($sql) or die($conexao->error);

$row = $res->fetch_object();

$qtd = $res->num_rows;

if ($qtd > 0) {
    $_SESSION["email"] = $email;
    $_SESSION["senha"] = $senha;
    header('Location: index.html');
    exit;
} else {
    echo "<script>alert('Usuário e/ou senha incorretos');</script>";
}
?>
