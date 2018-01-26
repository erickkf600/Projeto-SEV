<?php
$servername = "Meu Servidor";
$username = "Minha Conta";
$password = "Minha Senha";
$banco = "Meu Banco";

// Create connection
$conn = new mysqli($servername, $username, $password, $banco);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>