<?php
include "../config/config.php";
include "../includes/auth.php";
$perfil = $_SESSION["perfil"];
include "../includes/header.php";
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




    <div class ="card text-bg-success">
        <div class="card-body">
            <h5 class="card-title">Contas a receber</h5>
            <p class="card-text">R$ 1.200,00</p>
        </div>
</div>
        <div class="card text-bg-danger">
        <div class="card-body">
        <h5 class="card-title">Contas a pagar</h5>
        <p class="card-text"> R$ 900.00</p>
        
        </div>
    </div>
        <div class="card text-bg-secondary">
        <div class= "card-body">
        <h5 class = "card-title">Saldo total</h5>
        <p class= "card-text">R$ 300.00</p>
    </div>

        </div>
 

        

<?php include "../includes/footer.php"; ?>


