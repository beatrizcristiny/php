<?php
include "config/config.php";
include "data/dados.php";

$erro = "";

if ($_POST) {
    foreach ($usuarios as $user) {
        if (
            $_POST["usuario"] == $user["usuario"] &&
            $_POST["senha"] == $user["senha"]
        ) {
            $_SESSION["usuario"] = $user["usuario"];
            $_SESSION["perfil"] = $user["perfil"];
            header("Location: pages/dashboard.php");
            exit;
        }
    }
    $erro = "Usuário ou senha inválidos!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Login</h2>
        <?php if ($erro) echo "<p class='text-danger'>$erro</p>";?>
        <form method="POST">
            <div class="mb-3">
                <label class ="form-label">Email</label>
                <input type="text" name="usuario" class="form-control">
            </div>
            <div class="mb-3">
                <label class ="form-label">Senha</label>
                <input type="password" name="senha" class="form-control">
            </div>
            <button class="btn btn-primary">Entrar</button>

</form>

</div>
</body>
</html>