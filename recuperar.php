<?php
session_start();
include 'conexao.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$contato = $_POST['contato'];

$sql = "SELECT id, usuario, email FROM usuarios WHERE email = ? OR celular = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $contato, $contato);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    $_SESSION['recupera_id'] = $row['id'];
    $_SESSION['recupera_nome'] = $row['usuario'];
    $_SESSION['recupera_email'] = $row['email'];

    $codigo = rand(100000, 999999);
    $_SESSION['codigo_verificacao'] = $codigo;

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'infopro.ajuda@gmail.com'; 
        $mail->Password   = 'qdkwnlldleqeywit';       
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('infopro.ajuda@gmail.com', 'INFOPRO');
        $mail->addAddress($row['email']);

        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = 'Código de Verificação - INFOPRO';


        $mail->Body = '
        <html>
        <head>
        <style>
            body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
            }
            .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            .logo {
            text-align: center;
            margin-bottom: 20px;
            }
            .title {
            font-size: 24px;
            color: #333333;
            text-align: center;
            margin-bottom: 10px;
            }
            .content {
            font-size: 16px;
            color: #333333;
            margin-bottom: 20px;
            }
            .code {
            font-size: 22px;
            font-weight: bold;
            background: #eee;
            padding: 10px;
            border-radius: 6px;
            text-align: center;
            margin: 20px 0;
            }
            .button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 6px;
            text-align: center;
            }
            .footer {
            text-align: center;
            font-size: 12px;
            color: #999999;
            margin-top: 30px;
            }
        </style>
        </head>
        <body>
        <div class="container">
            <div class="title">Codigo de Verificação - INFOPRO</div>
            <div class="content">
            Olá, <strong>' . htmlspecialchars($_SESSION['recupera_nome']) . '</strong>!<br><br>
            Aqui está o seu código de verificação para recuperar sua conta:
            <div class="code">' . $_SESSION['codigo_verificacao'] . '</div>
            Se você não solicitou essa recuperação, apenas ignore esta mensagem.<br><br>
            <a href="http://localhost/INFOPRO_LOGIN/verificar_codigo.html" class="button">Verificar Código</a>
            </div>
            <div class="footer">
            &copy; ' . date('Y') . ' INFOPRO. Todos os direitos reservados.
            </div>
        </div>
        </body>
        </html>
        ';  

        $mail->CharSet = 'UTF-8';
        $mail->send();

        header("Location: verificar_codigo.html");
        exit();
    } catch (Exception $e) {
        echo "<script>alert('Erro ao enviar e-mail: {$mail->ErrorInfo}'); window.location.href='recuperar.html';</script>";
    }
} else {
    echo "<script>alert('Contato não localizado!'); window.location.href='recuperar.html';</script>";
}
?>
