<?php
session_start(); 

$email   = $_POST['email']; // Aqui recebe o email preechido no formulário
$subject = $_POST['subject']; // Aqui é o assunto que você quiser
$message = $_POST['message']; // Aqui é a mensagem que você quer enviar. Pode digitar o que quiser
$headers .= "Para: $nome <$email>" . "\r\n";  // Aqui é o cabeçalho do Email. Aqui aparece o nome e o email preechido no formulário
$headers .= "De: Administrador <contato@vhgesso.com.br>" . "\r\n"; // Aqui você pode colocar o seu email
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n"; // Aqui você nao muda nada
mail($email, $subject, $message, $headers); // Essa é a linha que faz a mágica toda :)

$_SESSION['enviado'] = "Usuário ou senha Inválido";
header('Location: ../contato.php');
?>