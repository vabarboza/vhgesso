<?php
session_start();
$nome = $_POST['name'];
$assunto = $_POST['subject'];
$email1 = $_POST['email1'];
$email   = $_POST['email']; // Aqui recebe o email preechido no formulário
$subject = "Contato: " . "$assunto"; // Aqui é o assunto que você quiser
$message = $_POST['message'] .'<br>'."Email: ". $_POST['email']; // Aqui é a mensagem que você quer enviar. Pode digitar o que quiser
$headers .= "To: $email1" . "\r\n";  // Aqui é o cabeçalho do Email. Aqui aparece o nome e o email preechido no formulário
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n"; // Aqui você nao muda nada
mail($email, $subject, $message, $headers); // Essa é a linha que faz a mágica toda :)

$_SESSION['enviado'] = "Email Enviado";
header('Location: ../contato.php');
