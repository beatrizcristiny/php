<?php
include "../config/config.php";
include "../includes/auth.php";
$perfil = $_SESSION["perfil"];
include "../includes/menu.php";
echo "Bem vindo!!!" . $_SESSION["usuario"];
if ($perfil == "cliente"){
    echo "<p>Area do cliente</p>";
}elseif ($perfil == "empresa"){
    echo "<p>Area da empresa</p>";
}elseif ($perfil == "proprietario"){
    echo "<p>Area do proprietario</p>";
}
?>