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
        <h2 >Bem-vindo <br>de volta!</h2>

        <h4 id="h4">acesse sua conta  agora mesmo</h3>

        <input type="email" placeholder="E-mail" name="email" id="email">    
        <br> <br>
        <input type="password" placeholder="Senha" name="senha" id="senha">
        <br> <br>    
        <input type="hidden" name="acao" value="login">
        <?php
            //  mensagem de erro 
            if (isset($_GET['erro']) && !empty($_GET['erro'])) {
                echo '<p style="color: gray;">' . $_GET['erro'] . '</p>';
            }
        ?>
        <button class="meu-botao">LOGIN</button>
        <button class="meu-botao-2">CADASTRAR</button>

    </div>
</form>
<form action="cadastro_cliente.php" method="post">
    
            <div class="painel-2">
                
                <h1>Crie sua conta</h1>
                <h3 id="titulo">Preencha seus dados</h3>
                <input type="text" placeholder="Nome" name="nome" id="nome">
                <input type="text" placeholder="Celular" name="Celular" id="nome">
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

</form>
</body>
</html>