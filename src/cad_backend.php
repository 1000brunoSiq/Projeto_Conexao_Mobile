<?php
session_start();
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $celular = mysqli_real_escape_string($conexao, trim($_POST['celular']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
    $endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));

    if (empty($nome) || empty($celular) || empty($email) || empty($senha) || empty($endereco)) {
        $_SESSION['erro_cadastro'] = "Preencha os campos para validação do cadastro.";
        header("Location: interfaces_e_estilos/cadastro_cliente.php");
        exit();
    }

    $sql = "SELECT COUNT(*) AS total FROM cadastro_clientes WHERE email = '$email'";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row['total'] == 1) {
        $_SESSION['usuario_existe'] = "Email já cadastrado. Escolha outro email.";
        header('location: interfaces_e_estilos/cadastro_cliente.php');  
        exit;
    }

    $sql = "INSERT INTO cadastro_clientes (nome, celular, email, senha, endereco) VALUES ('$nome', '$celular', '$email', '$senha', '$endereco')";

    if ($conexao->query($sql) === true) {
        $_SESSION['cadastro_sucesso'] = "Cadastro realizado com sucesso!";
        header('location: interfaces_e_estilos/login_cliente.php');
        exit;
    } else {
        $_SESSION['status_cadastro'] = false;
        $_SESSION['error'] = "Erro ao cadastrar o usuário: " . $conexao->error;
        header('location: interfaces_e_estilos/cadastro_cliente.php');
        exit;
    }
}

$conexao->close();
?>
