<?php

echo "opa <br/>";


$servermame = "192.168.50.6";
$username = "phpuser";
$password = "pass";


$conn = new mysqli($servermame, $username, $password);


if($conn->connect_error){
    die("Conexao falou: " . $conn->connect_error);
}

echo "Conectado com sucesso!";

?>
