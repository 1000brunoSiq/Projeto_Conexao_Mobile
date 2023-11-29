<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro e Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <form action="login_cliente.php" method="post">
        <div class="painel">
            <h1>CONEXÃO MOBILE</h1>

            <div id="h2"></div>
            <h2>Bem-vindo <br>de volta!</h2>

            <div id="h4">acesse sua conta agora mesmo</div>
            <div class="mensagem-erro">


<div class="alert alert-danger">
    <?php
    if (isset($_SESSION['erro'])) {
        echo '<p style="color: red;">' . $_SESSION['erro'] . '</p>';
        unset($_SESSION['erro']);
    }

    // Exibir outros alertas...
    ?>
</div>

<!-- Exibindo alerta de sucesso -->
<div class="alert alert-success">
    <?php
    if (isset($_SESSION['cadastro_sucesso'])) {
        echo $_SESSION['cadastro_sucesso'];
        unset($_SESSION['cadastro_sucesso']);
    }

    // Exibir outros alertas...
    ?>
</div>

<!-- Exibindo alerta de login -->
<div class="alert alert-danger">
    <?php
    if (isset($_SESSION['erro_login'])) {
        echo $_SESSION['erro_login'];
        unset($_SESSION['erro_login']);
    }

    // Exibir outros alertas...
    ?>
</div>

<!-- Exibindo alerta de usuário existente -->
<div class="alert alert-warning">
    <?php
    if (isset($_SESSION['usuario_existe'])) {
        echo $_SESSION['usuario_existe'];
        unset($_SESSION['usuario_existe']);
    }

    // Exibir outros alertas...
    ?>
</div>

<!-- Exibindo alerta de erro durante o cadastro -->
<div class="alert alert-danger">
    <?php
    if (isset($_SESSION['error'])) {
        echo $_SESSION['error'];
        unset($_SESSION['error']);
    }

    // Exibir outros alertas...
    ?>
</div>
                <p>
                    <input type="email" placeholder="E-mail" name="email" id="email">
                </p>
                <p>
                    <input type="password" placeholder="Senha" name="senha" id="senha">
                </p>
                <p>
                    <input type="hidden" name="acao" value="login">
                </p>
                <p>
                    <input class="meu-botao" type="submit" value="LOGIN" >
                </p>
                <div>
                    Não tem conta? <a class="cadastre-se" href="cadastro.php">Cadastre-se</a>
                </div>
                
            </div>
    </form>
</body>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>