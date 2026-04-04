<?php
$contas = [["descricao" => "Na escola", "valor" => 1500,00, "tipo" => "Pagar"], ["descricao" => "Na escola", "valor" => 100,00, "tipo" => "Receber"], ["descricao" => "Na escola", "valor" => 1900,00, "tipo" => "Receber"]];
foreach ($contas as $exibir){
    if ($exibir["tipo"] === "Receber"){
        echo $exibir["descricao"] . "-R$" . $exibir["valor"] . $exibir["tipo"] . "<br>";
    }
}


?>