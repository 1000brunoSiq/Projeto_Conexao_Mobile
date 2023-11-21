<?php
session_start();
if(empty($_POST) or (empty($_POST["usuario"] or empty($_POST["senha"])))){
    header('Location: Front-end/index.html');}         

include('config.php');
//painel 1
    $email= addslashes($_POST['emailPainel1']);
    $senha= addslashes($_POST['senhaPainel1']);

   $sql = "SELECT * FROM usuarios
            WHERE usuario = '{$usuario}'
            END senha = '{$senha}'";

$res = $conn->query($sql) or die($conn->error);

$row = $res->fetch_object();

$qtd = $res->num_rows;

if($qtd > 0){
    $_SESSION["usuario"] =
}else{

};

    
?>