<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro e Login</title>
    <link rel="stylesheet" href="cadastro.css">

</head>

<body>

    <form action="login_cliente.php" method="post">
        <div class="painel">
            <h1>CONEXÃO MOBILE</h1>

            <div id="h2"></div>
            <h2>Bem-vindo <br>de volta!</h2>

            <h4 id="h4">acesse sua conta agora mesmo</h3>

                <input type="email" placeholder="E-mail" name="email" id="email">
                <br> <br>
                <input type="password" placeholder="Senha" name="senha" id="senha">
                <br> <br>
                <input type="hidden" name="acao" value="login">
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





                </div>
                <button class="meu-botao">LOGIN</button>
                <button class="meu-botao-2 cadastrar-botao">CADASTRAR</button>

        </div>
    </form>
    <form action="cadastro_cliente.php" method="post">

        <div class="painel-2">

            <h1>Crie sua conta</h1>
            <h3 id="titulo">Preencha seus dados</h3>
            <input type="text" placeholder="Nome" name="nome" id="nome">
            <input type="text" placeholder="Celular" name="celular" id="nome">
            <input type="email" placeholder="E-mail" name="email" id="nome">
            <input type="password" placeholder="Senha" name="senha" id="nome">
            <input type="text" placeholder="Endereço" name="endereco" id="nome">
            <input type="hidden" name="acao" value="cadastro">

        </div>

        </div>
        <div>
        </div>

        <div id="icon">
            <ion-icon name="person"></ion-icon>



        </div>
        <div id="icon-2">
            <ion-icon name="call"></ion-icon>
        </div>

        <div id="icon-3">
            <ion-icon name="mail"></ion-icon>
        </div>

        <div id="icon-4">
            <ion-icon name="lock-closed"></ion-icon>
        </div>

        <div id="icon-5">
            <ion-icon name="business"></ion-icon>
        </div>





        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>