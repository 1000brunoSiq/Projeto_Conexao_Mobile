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


        <form action="cadastro_cliente.php" method="post">

            <div class="painel-2">

                <h1>Crie sua conta</h1>

                <h2 id="titulo">Preencha seus dados</h2>

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
                    <button type="submit" >Cadastrar</button>
                </div>

                <input type="hidden" name="acao" value="cadastro">

            </div>

    </div>

