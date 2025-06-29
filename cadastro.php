<?php
include 'conexao.php';

$usuario = $_POST['usuario'];
$senhaHash = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$email   = $_POST['email'];
$celular = $_POST['celular'];

$sql_check = "SELECT * FROM usuarios WHERE usuario = ?";
$stmt_check = $conn->prepare($sql_check);
$stmt_check->bind_param("s", $usuario);
$stmt_check->execute();
$result = $stmt_check->get_result();

if ($result->num_rows > 0) {
    header("Location: cadastro.html?status=existe");
    exit();
} else {
    $sql = "INSERT INTO usuarios (usuario, email, celular, senha) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $usuario, $email, $celular, $senhaHash);

    if ($stmt->execute()) {
        header("Location: cadastro.html?status=sucesso");
        exit();
    } else {
        header("Location: cadastro.html?status=erro");
        exit();
    }
}
$conn->close();
?>