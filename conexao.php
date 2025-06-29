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
$password = ""; // Deixe vazio no XAMPP, a menos que você tenha colocado senha
$dbname = "infopro"; // Troque para o nome REAL do seu banco de dados

// Criar a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
