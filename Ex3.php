<?php

$produtos = [["nome" => "Uva", "preco" => 4,00], ["nome" => "Banana", "preco" => 5,00], ["nome" => "Morango", "preco" => 8,50]];
foreach ($produtos as $todos => $eles){
     echo $todos . ":" .$eles["nome"] . $eles["preco"]. "<br>";
} 


?>