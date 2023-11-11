<?php
include_once 'config.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro e Login</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
    <div class="painel" method="POST" action="./login.php"  >
        <h1>CONEXÃO MOBILE</h1>
        
        <div id="h2"></div>
        <h2 >Bem-vindo <br>de volta!</h2>

        <h4 id="h4">acesse sua conta  agora mesmo</h3>

        <input type="email" placeholder="   E-mail"  name="email" id="email">
    
        <br> <br>
        <input type="password" placeholder="   Senha" name="senha"  id="senha">
        <br> <br>
    
        <button class="meu-botao" value="enviar">LOGIN</button>


        <button class ="meu-botao-2">CADASTRE-SE</button>

    </div>
        <div class="painel-2">
            
            <h1>Crie sua conta</h1>
            <h3 id="titulo">Preencha seus dados</h3>
          <input type="text" placeholder="Nome" name="nome" id="nome">
          <input type="text" placeholder="Celular" name="celular" id="celular">
          <input type="email" placeholder="E-mail" name="email" id="email">
          <input type="password" placeholder="Senha" name="senha"  id="senha">
          <input type="text" placeholder="Endereço" name="endereço"  id="endereço">

        </div>

       </div>
       <div>
    </div>


</body>
</html>