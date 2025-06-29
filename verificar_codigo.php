<?php
session_start();

if (!isset($_SESSION['codigo_verificacao'])) {
    header("Location: recuperar.html");
    exit();
}

$codigoDigitado = $_POST['codigo'];

if ($codigoDigitado == $_SESSION['codigo_verificacao']) {
   
    unset($_SESSION['codigo_verificacao']);
    header("Location: nova_senha.html");
    exit();
} else {
    echo "<script>
        alert('Código incorreto. Tente novamente.');
        window.location.href='verificar_codigo.html';
    </script>";
}
?>
