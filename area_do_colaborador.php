    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Area do colaborador</title>
        <link rel="stylesheet" href="area_do_colaborador.css">
    </head>

    <body>



        <form action="login_colaborador.php" method="POST">

            <div class="painel-2">
                <h1>Area do colaborador</h1>
                <h3 id="titulo">Preencha seus dados</h3>
                <?php
                //  mensagem de erro 
                if (isset($_GET['erro']) && !empty($_GET['erro'])) {
                    echo '<p style="color: gray;">' . $_GET['erro'] . '</p>';
                }
                ?>

                <input type="email" placeholder=" E-mail" name="email" id="emaill">

            </div>
            <div id="senhaa">
                <input type="password" placeholder="Senha" name="senha" id="senhaa">
            </div>

            <div>

                <button class="meu-botao" type="submit">LOGIN</button>

            </div>

        </form>
    </body>

    </html>