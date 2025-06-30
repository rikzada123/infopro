<?php
session_start();
include 'conexao.php';

if (!isset($_SESSION['recupera_id'])) {
    header("Location: login.html");
    exit();
}

$novaSenha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$id = $_SESSION['recupera_id'];

$sql = "UPDATE usuarios SET senha = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $novaSenha, $id);

if ($stmt->execute()) {
  
    unset($_SESSION['recupera_id'], $_SESSION['recupera_nome']);
    echo "<script>
            alert('Senha alterada com sucesso!');
            window.location.href='login.html';
          </script>";
} else {
    echo "Erro: " . $stmt->error;
}
?>
