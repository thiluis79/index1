<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $to = "seuemail@dominio.com"; // Substitua pelo e-mail de destino
    $subject = "Novo formulário enviado";
    $message = "Nome: " . $nome . "\nE-mail: " . $email;
    $headers = "From: webmaster@seudominio.com"; // Ajuste para o e-mail do seu servidor

    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar e-mail.";
    }
}
?>
