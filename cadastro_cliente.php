<?php
session_start();
include ('config.php');

$nome = mysqli_real_escape_string($conexao,trim($_POST['nome']));
$celular = mysqli_real_escape_string($conexao,trim($_POST['celular']));
$email = mysqli_real_escape_string($conexao,trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao,trim(md5($_POST['senha'])));
$endereco = mysqli_real_escape_string($conexao,trim($_POST['endereco']));

$sql = "SELECT COUNT(*) AS total FROM cadastro_clientes WHERE email = '$email'";
$result = mysqli_query($conexao,$sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1 ){
    $_SESSION['usuario_existe'] = true;
    header('location: cadastro_cliente.php');
    exit;
}
$sql = "INSERT INTO cadastro_clientes (nome,  celular, email, senha, endereco) VALUES ('$nome', '$celular', '$email',  '$senha', '$endereco')";
if($conexao->query($sql) === true){
    $_SESSION['status_cadastro'] = true;
}else {
    $_SESSION['status_cadastro'] = false;
    $_SESSION['error'] = "Erro ao cadastrar o usuário: " . $conexao->error;
}

$conexao->close();



header('location: cadastro.php');
exit;
?>