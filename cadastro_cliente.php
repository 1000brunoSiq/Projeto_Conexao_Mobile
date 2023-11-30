<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro e Login</title>
    <link rel="stylesheet" href="cadastro_cliente.css">
    <script src="https://kit.fontawesome.com/0100cd96fb.js" crossorigin="anonymous"></script>
</head>

<body>

    <div id="form">


        <form action="cad_backend.php" method="post" novalidate>
            <div class="mensagem_erro">
                <div class="painel-2">

                    <h1>Crie sua conta</h1>

                    <h2 id="titulo">Preencha seus dados</h2>

                    <!--  alertaa de sucesso -->
                    <div class="mensagem-erro-container ">
                        <?php
                        if (isset($_SESSION['cadastro_sucesso'])) {
                            echo $_SESSION['cadastro_sucesso'];
                            unset($_SESSION['cadastro_sucesso']);
                        } ?>
                    </div>
                    <!--  alerta de usuário existente -->
                    <div class="mensagem-erro-container ">
                        <?php
                        if (isset($_SESSION['usuario_existe'])) {
                            echo $_SESSION['usuario_existe'];
                            unset($_SESSION['usuario_existe']);
                        }
                        ?>
                    </div>
                    <!--  alerta de erro durante o cadastro -->
                    <div class="mensagem-erro-container ">
                        <?php
                        if (isset($_SESSION['error'])) {
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                        }
                        ?>
                    </div>
                    <!--  alerta de erro durante o cadastro -->
                    <div class="mensagem-erro-container ">
                        <?php
                        if (isset($_SESSION['erro_cadastro'])) {
                            echo $_SESSION['erro_cadastro'];
                            unset($_SESSION['erro_cadastro']);
                        }
                        ?>
                    </div>

                    <div class="input">
                        <i class="fa-solid fa-user"></i>
                        <input type="username" placeholder="Nome Completo" name="nome" id="nome" required />
                    </div>
                    <div class="input">
                        <i class="fa-solid fa-mobile"></i>
                        <input type="int" placeholder="Celular" name="celular" id="celular" required />
                    </div>

                    <div class="input">
                        <i class="fa-solid fa-envelope"></i>

                        <input type="text" placeholder="E-mail" name="email" id="email" required />
                    </div>

                    <div class="input">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Senha" name="senha" id="senha" required />
                    </div>

                    <div class="input">
                        <i class="fa-solid fa-location-dot"></i>
                        <input type="text" placeholder="Endereço" name="endereco" id="endereco" required />
                    </div>

                    <div class="btn">
                        <button type="submit">Cadastrar</button>
                    </div>

                    <input type="hidden" name="acao" value="cadastro">

                </div>
            </div>
    </div>