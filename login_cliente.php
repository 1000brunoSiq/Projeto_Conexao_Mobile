<?php
include('config.php');

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if (empty($email) || empty($senha)) {
        $_SESSION['erro'] = "Campos email e senha são obrigatórios!";
        // header("Location: cadastro.php");
        // exit();
    }

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM cadastro_clientes
        WHERE email = '{$email}' AND senha = '{$senha}'";

    $res = $conexao->query($sql) or die($conexao->error);

    $row = $res->fetch_object();

    $qtd = $res->num_rows;

    if ($qtd > 0) {
        $_SESSION["email"] = $email;
        $_SESSION["senha"] = $senha;
        header('Location: checkout.html');
        exit;
    } else {
        $_SESSION['erro_login'] = "Usuário e/ou senha incorretos";
        header("Location: cadastro.php");  // Redireciona para a página de cadastro
        exit;
    }
}
?>
