<?php
include ('config.php');

session_start();
if(empty($_POST) or (empty($_POST["usuario"] or empty($_POST["senha"])))){
    header('Location: index.html');}         



//painel 1
    $email= $_POST['email'];
    $senha= $_POST['senha'];

   $sql = "SELECT * FROM usuarios
            WHERE usuario = '{$usuario}'
            END senha = '{$senha}'";

$res = $conexao->query($sql) or die($conn->error);

$row = $res->fetch_object();

$qtd = $res->num_rows;

if($qtd > 0){
    $_SESSION["email"] = $usuario;
    $_SESSION["senha"] = $senha;
    header('location: Location: index.html');
}else{
    header ("<script>alert('usuário e/ou senha incorreto');</script>");
};

    
?>