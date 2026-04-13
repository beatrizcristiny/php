<?php
include "../config/config.php";
include "../includes/auth.php";
$perfil = $_SESSION["perfil"];
include "../includes/header.php";
include "../includes/menu.php";

echo "<div class='container mt-4 text-center'>";
echo "Bem vindo!!!" . $_SESSION["usuario"];
if ($perfil == "cliente"){
    echo "<p>Area do cliente</p>";
}elseif ($perfil == "empresa"){
    echo "<p>Area da empresa</p>";
}elseif ($perfil == "proprietario"){
    echo "<p>Area do proprietario</p>";
}
?>




    <div class="container mt-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card text-bg-success">
                <div class="card-body">
                    <h5 class="card-title">Contas a Receber</h5>
                    <p class="card-text">R$ 1.200,00</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-bg-danger">
                <div class="card-body">
                    <h5 class="card-title">Contas a Pagar</h5>
                    <p class="card-text">R$ 900,00</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-bg-secondary">
                <div class="card-body">
                    <h5 class="card-title">Saldo Total</h5>
                    <p class="card-text">R$ 300,00</p>
                </div>
            </div>
        </div>
    </div>
</div>

        

<?php include "../includes/footer.php"; ?>


