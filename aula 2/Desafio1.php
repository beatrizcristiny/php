<?php
$usuarios = [["usuario" => "Beatriz.pires2", "perfil" => "publico"], ["usuario" => "AnaC.mag", "perfil" => "privado"], ["usuario" => "Arnaldo.Hid", "perfil" => "publico"]];
foreach ($usuarios as $todos => $usu){
    echo $todos . $usu["usuario"]. $usu["perfil"] . "<br>";
}
?>