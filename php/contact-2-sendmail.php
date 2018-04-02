<meta charset="utf-8" />
<?php
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->setLanguage('pt');

if($_POST)
{
	$nome = $_POST['nome'];
	$email = filter_var(trim($_POST['email']),FILTER_SANITIZE_EMAIL);
	$telefone = $_POST['telefone'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];

	$msg = "";
	$msg .= "<h3>Mensagem de ".$nome." </h3>";
	$msg .= "<h3>DADOS DO FORMULÁRIO</h3>";
	$msg .= "<p><b>Nome: </b> ".$nome.". </p>";
	$msg .= "<p><b>Email: </b> ".$email.". </p>";
	$msg .= "<p><b>Assunto: </b> ".$assunto.". </p>";
	$msg .= "<p><b>Telefone: </b> ".$telefone.". </p>";
	$msg .= "<p><b>Mensagem: </b> ".$mensagem.". </p>";

	// REMETENTE, TROCAR O VALOR DAS VARIAVEIS FROM E FROM_NAME
	$from = 'sac@matabem.com';
	$from_name = 'Site - Contato Matabem';
	$mail->IsSMTP();
	// TROCAR PELO HOST DA HOSPEDAGEM, PROCURAR NAS CONFIGURAÇÕES DE EMAIL
	$mail->Host = 'br704.hostgator.com.br';
	$mail->SMTPAuth = true;
	// TROCAR PELO WEBMAIL E SENHA DO SITE, EMAIL E SENHA DE EMAIL DE AUTENTICAÇÃO
	$mail->Username = 'sac@matabem.com';
	$mail->Password = 'Isabela10908';
	$mail->Port = '465';
	$mail->Mailer = 'smtp';
	$mail->SMTPSecure = 'ssl';
	$mail->SMTPDebug = 1;
	$mail->From = $email;
	$mail->FromName = $email;
	$mail->addReplyTo($from, $from_name);
	// EMAIL E NOME QUE IRÃO RECEBER A MENSAGEM
	$mail->addAddress('sac@matabem.com', 'Site - Contato Matabem');
	$mail->isHTML(true);
	$mail->CharSet = 'utf-8';
	$mail->WordWrap = 70;
	$mail->Subject = $assunto;
	$mail->Body = $msg;
	$send = $mail->send();
	if($send)
	{
		header('Location:../contact-2.html');
	}
	else
	{
		echo '<script>alert("Erro ao enviar o formulário!");</script>';
		header('Location:../contact-2.html');
	}
}
?>