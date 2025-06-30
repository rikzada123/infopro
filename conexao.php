<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "infopro";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "infopro"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
