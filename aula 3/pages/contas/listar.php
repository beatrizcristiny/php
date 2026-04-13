<?php
include "../../config/config.php";
include "../../includes/auth.php";
$perfil = $_SESSION["perfil"];
include "../../includes/header.php";
include "../../includes/menu.php";
include "../../data/dados.php";
?>
<div class="container">
    <h2>Lista das contas</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
<tr>
        <th>Descrição</th>
        <th>Valor</th>
        <th>Tipo</th>
    </tr>    
        </thead>
        <tbody>
            <?php
            foreach($contas as $conta){
                echo "<tr>";
                echo "<td>" . $conta["descricao"] . "</td>";
                echo "<td>R$ ". $conta["valor"] . "</td>";
                echo "<td>" . $conta["tipo"] . "</td>";
                echo "</tr>";
                
            }
            ?>
    </table>
</div>