<?php
include ('config.php');
session_start();

// print_r($_POST);

// if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
    if (empty($_POST['email']) || empty($_POST['senha'])) {
        echo "Campos email e senha são obrigatórios!";
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
        echo "Usuário e/ou senha incorretos!";
        header('Location:area_do_colaborador.php');    

    } else {

        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        header('Location:sistema.php');
    }

?>
