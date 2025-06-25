<?php
session_start();
include('conexao.php');

if (isset($_POST['usuario']) && isset($_POST['senha'])) {
    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";
    $result = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['usuario'] = $usuario;
        header('Location: site.php');
        exit();
    } else {
        echo "<script>alert('Usuário ou senha incorretos!'); window.location.href='login.html';</script>";
    }
} else {
    header('Location: login.html');
    exit();
}
?>
