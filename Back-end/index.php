<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão Mobile</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color: white;
        }

        .box {
            position: absolute;
            top: 12.5%;
            left: 8%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            padding: 30px;
            border-radius: 10px;
        }

        a {
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }

        a:hover {
            background-color: dodgerblue;
        }

        .panel {
            top: 50%;
            left: 50%;
            transform: translate(75%, 40%);
            width: 50%;
        }
    </style>
</head>

<body>

    <h1 style="text-align: center;">Bem Vindo</h1>
    <h2 style="text-align: center;">Conexão Mobile</h2>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
    <div class="panel">
        <img src="https://shorturl.at/btAK0" width="50%"><br>
    </div>

</body>

</html>