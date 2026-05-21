<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['nm_email'];
    $senha = $_POST['senha'];
    $conf_senha = $_POST['conf_senha'];

    if ($senha == $conf_senha) {

        header("Location: home.php");
        exit();

    } else {
        $erro = "As senhas não coincidem!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Cadastro Seguro</h1>

    <p><a href="index.php">Voltar</a></p>

    <?php
    if (isset($erro)) {
        echo "<p style='color:red;'>$erro</p>";
    }
    ?>

    <form method="POST">

        <label class="label">
            <input
                type="email"
                name="nm_email"
                placeholder="E-mail"
                required
            >
        </label>

        <label class="label">
            <input
                type="password"
                name="senha"
                placeholder="Senha"
                required
            >
        </label>

        <label class="label">
            <input
                type="password"
                name="conf_senha"
                placeholder="Confirmar senha"
                required
            >
        </label>

        <div class="actions">
            <button class="btn btn-secondary" type="submit">
                Criar conta
            </button>
        </div>

    </form>

</div>

</body>
</html>