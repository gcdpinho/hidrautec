<?php
$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));
	
$to = 'comercial@hidrau.tech';
$email_subject = "Mensagem do site:  $name";
$email_body = "Você recebeu uma nova mensagem do seu site.\n\n"."Aqui estão os detalhes:\n\nNome: $name\n\nE-mail: $email\n\nAssunto: $subject\n\nMensagem:\n$message";
$headers = "De: noreply@hidrautec.com.br\n";
$headers .= "Responder a: $email";	
mail($to,$email,$email_body,$headers);
return true;			
?>
