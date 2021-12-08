<?php

//Se o email foi preenchido ou não está vazio
if (isset($_POST['email']) && !empty($_POST['email'])) {
	

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']); 
$mensagem = addslashes($_POST['message']);

$to ="contato@programadorbr.com"; //Pra quem vai esse email
$subject="Contato - Programador Br";//Qual é o assunto
$body = "Nome: ".$nome. "\r\n".    //Corpo do email
        "Email: ".$email."\r\n".
        "Mensagem: ".$mensagem;

        $header = "From:igor@programadorbr.com"."\r\n".
        "Reply-To:".$email."\e\n".
        "X = mailer:PHP/".phpversion();

       if( mail($to, $subject,$body,$header)){
       	echo"Email enviado com sucesso!";

       }
       else{
       	echo"O e-mail não pode ser enviado com sucesso!";
       }
}
?>