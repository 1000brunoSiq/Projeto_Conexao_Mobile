<?php

include_once('config.php');

if (isset($_POST['add'])) {
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $descrição = mysqli_real_escape_string($conexao, $_POST['descrição']);
    $valor = mysqli_real_escape_string($conexao, $_POST['valor']);
    $quantidade = mysqli_real_escape_string($conexao, $_POST['quantidade']);

    $sqlInsert = "INSERT INTO produtos (nome, descrição, valor, quantidade) VALUES ('$nome', '$descrição', '$valor', '$quantidade')";

    if ($conexao->query($sqlInsert) === TRUE) {
        echo "Novo produto adicionado com sucesso!";
    } else {
        echo "Erro: " . $sqlInsert . "<br>" . $conexao->error;
    }

    $conexao->close();
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Adicionar novo produto</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }

        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }

        fieldset {
            border: 3px solid dodgerblue;
        }

        legend {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;

        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }


        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        #add {
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
            width: 50%;
            transform: translate(50%, -11%);
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 15px;
        }

        #add:hover {
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }
    </style>
</head>

<body>
    <h1>Adicionar novo produto</h1>
    <div class="box">
        <form action="adicionar.php" method="post">
            <fieldset>
                <legend><b>Adicionar Produtos</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome:</label>

                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="descrição" id="descrição" class="inputUser" required>
                    <label for="descrição" class="labelInput">Descrição:</label>

                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="valor" id="valor" step="0.01" class="inputUser" required>
                    <label for="valor" class="labelInput">Valor:</label>

                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="quantidade" id="quantidade" class="inputUser" required>
                    <label for="quantidade" class="labelInput">Quantidade:</label>

                </div>
                <br>
                <input type="submit" name="add" id="add" value="Adicionar">
            </fieldset>
        </form>
    </div>

    <br>

    <a href="sistema.php">Voltar para o sistema</a>
</body>

</html>