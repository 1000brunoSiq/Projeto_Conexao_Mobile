<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro e Login</title>
    <link rel="stylesheet" href="login_cliente.css">
</head>

<body>
    <form action="../src/log_backend.php" method="post">
        <div class="painel">
            <h1>CONEXÃO MOBILE</h1>

            <div id="h2"></div>
            <h2>Bem-vindo <br>de volta!</h2>

            <div id="h4">acesse sua conta agora mesmo</div>
            <div class="mensagem-erro">


                <div class="mensagem-erro-container">
                    <?php
                    if (isset($_SESSION['erro'])) {
                        echo '<p style="color: red;">' . $_SESSION['erro'] . '</p>';
                        unset($_SESSION['erro']);
                    }
                    ?>
                </div>                    
                </div>

                <!-- Exibindo alerta de login -->
                <div class="mensagem-erro-container">
                    <?php
                    if (isset($_SESSION['erro_login'])) {
                        echo $_SESSION['erro_login'];
                        unset($_SESSION['erro_login']);
                    }

                    ?>
                </div>
               
                <p>
                    <input type="email" placeholder="E-mail" name="email" id="email">
                </p>
                <p>
                    <input type="password" placeholder="Senha" name="senha" id="senha">
                </p>
                <p>
                    <input class="meu-botao" type="submit" value="LOGIN">
                </p>
                <div>
                    Não tem conta? <a class="cadastre-se" href="cadastro_cliente.php">Cadastre-se</a>
                </div>

            </div>
    </form>
</body>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>