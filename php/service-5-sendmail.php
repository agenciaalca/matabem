<meta charset="utf-8" />
<?php

require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->setLanguage('pt');

if($_POST)
{
	$segmento = $_POST['segmento'];
	$nome = $_POST['nome'];
	$cpfcnpj = $_POST['cpfcnpj'];
	$endereco = $_POST['endereco'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$cep = $_POST['cep'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$celular = $_POST['celular'];
	$servico = $_POST['servico'];
	$descricao = $_POST['descricao'];
	$conheceu = $_POST['conheceu'];

	$assunto = "Solicitação de Orçamento";

	$msg = "";
	$msg .= "<h3>Solicitação de Orçamento de ".$nome." </h3>";
	$msg .= "<h3>DADOS DO FORMULÁRIO</h3>";
	$msg .= "<p><b>Segmento: </b> ".$segmento.". </p>";
	$msg .= "<p><b>Nome: </b> ".$nome.". </p>";
	$msg .= "<p><b>CPF/CNPJ: </b> ".$cpfcnpj.". </p>";
	$msg .= "<p><b>Endereço: </b> ".$endereco.". </p>";
	$msg .= "<p><b>Bairro: </b> ".$bairro.". </p>";
	$msg .= "<p><b>Cidade: </b> ".$cidade.". </p>";
	$msg .= "<p><b>Estado: </b> ".$estado.". </p>";
	$msg .= "<p><b>CEP: </b> ".$cep.". </p>";
	$msg .= "<p><b>Email: </b> ".$email.". </p>";
	$msg .= "<p><b>Telefone: </b> ".$telefone.". </p>";
	$msg .= "<p><b>Celular: </b> ".$celular.". </p>";
	$msg .= "<p><b>Serviço: </b> ".$servico.". </p>";
	$msg .= "<p><b>Descrição do problema: </b> ".$descricao.". </p>";
	$msg .= "<p><b>Como Conheceu: </b> ".$conheceu.". </p>";

	//REMETENTE, TROCAR O VALOR DAS VARIAVEIS FROM E FROM_NAME
	$from = 'sac@matabem.com';
	$from_name = 'Site - Contato Matabem';
	$mail->IsSMTP();
	//TROCAR PELO HOST DA HOSPEDAGEM, PROCURAR NAS CONFIGURAÇÕES DE EMAIL
	$mail->Host = 'br704.hostgator.com.br';
	$mail->SMTPAuth = true;
	//TROCAR PELO WEBMAIL E SENHA DO SITE, EMAIL E SENHA DE EMAIL DE AUTENTICAÇÃO
	$mail->Username = 'sac@matabem.com';
	$mail->Password = 'Isabela10908';
	$mail->Port = '465';
	$mail->Mailer = 'smtp';
	$mail->SMTPSecure = 'ssl';
	$mail->SMTPDebug = 1;
	$mail->From = $email;
	$mail->FromName = $email;
	$mail->addReplyTo($from, $from_name);
	//EMAIL E NOME QUE IRÃO RECEBER A MENSAGEM
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