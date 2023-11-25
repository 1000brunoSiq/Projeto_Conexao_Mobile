<?php
include ('config.php');
session_start();

// print_r($_POST);

// if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    if (empty($_POST['email']) || empty($_POST['senha'])) { // impede que a requisição seja feita caso os campos estejam vazios e gera um alerta conforme mostra na prox line
         header('Location: area_do_colaborador.php?erro=Campos email e senha são obrigatórios!');
        exit;}
 //Acessa
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // print_r('Email: ' . $email);
    // print_r('<br>');
    // print_r('Senha: ' . $senha);

    $sql = "SELECT * FROM users WHERE email = '$email' and senha = '$senha'";

    $result = $conexao->query($sql);

    // print_r($sql);
    // print_r($result);

    if (mysqli_num_rows($result) < 1) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        $erro = "Usuário e/ou senha incorretos!";
        header("Location: area_do_colaborador.php?erro=" . urlencode($erro));    

    } else {

        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        header('Location:sistema.php');
    }

?>
