<?php
session_start();
include('config.php');

if (isset($_SESSION['cadastro_sucesso']) && $_SESSION['cadastro_sucesso'] === true) {
    echo '<div class="alert alert-success">';
    echo 'Cadastro realizado com sucesso!';
    echo '</div>';
    unset($_SESSION['cadastro_sucesso']);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Outros campos do formulário...

    if (empty($nome) || empty($celular) || empty($email) || empty($senha) || empty($endereco)) {
        $_SESSION['erro'] = "Formulários vazios. Preencha os campos para validação do cadastro.";
        // header("Location: cadastro.php");
        // exit();
    }



    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));
    $celular = mysqli_real_escape_string($conexao, trim($_POST['celular']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $senha = mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
    $endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));

    $sql = "SELECT COUNT(*) AS total FROM cadastro_clientes WHERE email = '$email'";
    $result = mysqli_query($conexao, $sql);
    $row = mysqli_fetch_assoc($result);

    if ($row['total'] == 1) {
        $_SESSION['usuario_existe'] = "Email já cadastrado. Escolha outro email.";
        header('location: cadastro.php');  // Redireciona para a página de cadastro
        exit;
    }
}
print_r('Email: ' . $email);
print_r('<br>');
print_r('Senha: ' . $senha);
$sql = "INSERT INTO cadastro_clientes (nome, celular, email, senha, endereco) VALUES ('$nome', '$celular', '$email', '$senha', '$endereco')";

if ($conexao->query($sql) === true) {
    // $_SESSION['status_cadastro'] = true;
    $_SESSION['cadastro_sucesso'] = "Cadastro realizado com sucesso!";
    header('location: cadastro.php');
    exit;
} else {
    $_SESSION['status_cadastro'] = false;
    $_SESSION['error'] = "Erro ao cadastrar o usuário: " . $conexao->error;
}


$conexao->close();

header('location: cadastro.php');
exit;
