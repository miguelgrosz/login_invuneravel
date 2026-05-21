<?php
$email = $_POST['nm_email'];
$senha = $_POST['senha'];
$conf_senha = $_POST['conf_senha'];

if ($senha !== $conf_senha) {
    echo "<script>alert('As senhas não são iguais!'); window.history.back();</script>";
    exit();
}

include 'config.php';

$insertUsuario = "INSERT INTO tb_usuario VALUE ('$email', '$senha')";

$check_email = "SELECT id_usuario FROM tb_usuario WHERE nm_email = '$email'";
$result = $conexao->query($check_email);

if ($result->num_rows > 0) {
    echo "<script>alert('Email já cadastrado, faça login'); window.location.href = '../../frontend/pages/login.html'</script>";
}

?>