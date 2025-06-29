<?php
session_start();
include('conexao.php');

if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    // Limpa os dados de entrada
    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = $_POST['senha']; // Não precisa escapar a senha, vai usar bind_param

    // Use prepared statement para evitar SQL Injection
    $sql = "SELECT * FROM usuarios WHERE usuario = ?";
    $stmt = mysqli_prepare($conexao, $sql);
    mysqli_stmt_bind_param($stmt, "s", $usuario);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        if (password_verify($senha, $row['senha'])) {
            $_SESSION['usuario'] = $row['usuario']; 
            header('Location: site.php');
            exit();
        } else {
            echo "<script>alert('Senha incorreta!'); window.location.href='login.html';</script>";
        }
    } else {
        echo "<script>alert('Usuário não encontrado!'); window.location.href='login.html';</script>";
    }
} else {
    header('Location: login.html');
    exit();
}
?>
