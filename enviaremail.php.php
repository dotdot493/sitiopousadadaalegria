<?php
date_default_timezone_set('America/Sao_Paulo');
 
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');



 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
if((isset($_POST['email']) && !empty(trim($_POST['email']))) && (isset($_POST['mensagem']) && !empty(trim($_POST['mensagem'])))) {
 
	$nome = !empty($_POST['nome']) ? $_POST['nome'] : 'Não informado';
	$email = $_POST['email'];
	$assunto = !empty($_POST['assunto']) ? utf8_decode($_POST['assunto']) : 'Não informado';
	$mensagem = utf8_decode($_POST['mensagem']);
	$data = date('d/m/Y H:i:s');
 
	$mailer = new PHPMailer();
	$mailer->isSMTP();
	
	$mailer->Host = 'mail.sitiopousadadaalegria.com';  /* É onde esta hospedado o formulário*/
	$mailer->SMTPAuth = true;
	$mailer->Username = 'contato@sitiopousadadaalegria.com'; /* e-mail do dominio*/
	$mailer->Password = 'Jw@c2012'; /* senha do email*/
	$mailer->Port = 587;
 
	$mailer->setFrom('contato@sitiopousadadaalegria.com');
	$mailer->addAddress('contato@sitiopousadadaalegria.com');
 
	$mailer->isHTML(true);
	$mailer->Subject = $assunto;
	$mailer->Body = "Nome: {$nome}<br>
				   Email: {$email}<br>
				   Mensagem: {$mensagem}<br>
				   Data/hora: {$data}";
 
	if($mail->send()) {
		echo '<br>Email enviado com sucesso.';
		echo '<br><a href="http://localhost/sitiopousada/contact.html"><button>Voltar</button></a>';
		
	} else {
		echo '<br>Email não enviado.';
		echo '<br><a href="http://localhost/sitiopousada/contact.html"><Voltar</button></a>';
	}
} else {
	echo '<br>Não enviado: informar o email e a mensagem.';
	echo '<br><a href="http://localhost/sitiopousada/contact.html"><button>Voltar</button></a>';}
?>