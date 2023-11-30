<?php
include('config.php');

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    
    $mensagem_erro = "";

    if (empty($email) || empty($senha)) {
        $mensagem_erro = "Campos email e senha são obrigatórios!";
    } else {
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
            header('Location: index.php');
            exit;
        } else {
           
            $mensagem_erro = "Usuário e/ou senha incorretos";
        }
    }

  
    $_SESSION['erro'] = $mensagem_erro;

    header("Location: login_cliente.php");
    exit;
}
?>

