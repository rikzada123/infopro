<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "infopro";

// Conexão usando mysqli
$conn = new mysqli($host, $usuario, $senha, $banco);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Opcional: define charset como utf8
$conn->set_charset("utf8");
?>
