<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }

        div {
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;
            text-align: center;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        .inputSubmit {
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 50%;
            margin: 0 auto;
            border-radius: 10px;
            color: white;
            font-size: 15px;

        }

        .inputSubmit:hover {
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <a href="index.php">Início</a>
    <div>
        <h1 style="text-align: left;">Login</h1>
        <form action="testLogin.php" method="POST">

            <input type="email" name="email" placeholder="Digite seu Email">
            <br><br>
            <input type="password" name="senha" placeholder="Digite sua Senha">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>

</html>