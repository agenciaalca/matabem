<?php

if (isset($_POST['btnSendContato'])) {

    $msg = '';

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $assunto = $_POST["assunto"];
    $mensagem = $_POST['mensagem'];

    if ((!empty($nome)) && (!empty($email)) && (!empty($telefone)) && (!empty($assunto)) && (!empty($mensagem))) {

        $email_remetente = "contato@matabem.com"; // deve ser uma conta de email do seu dominio 
        $email_destinatario = "contato@matabem.com"; // email que receberá as mensagens
        $email_recebidoDe = "$email";
        $email_assunto = "Formulário de Contato"; // Este será o assunto da mensagem
        $email_conteudo = "FORMULÁRIO DE CONTATO\n"
                . "<br><b>De:</b> " . $nome
                . "<br><b>Email:</b> " . $email
                . "<br><b>Telefone:</b> " . $telefone
                . "<br><b>Assunto:</b> " . $assunto
                . "<br><b>Mensagem:</b> " . $mensagem
                . "<br><br>"
                . "<hr>"
                . "<br>Mensagem enviada do formulário de contato por www.matabem.com";

        $email_cabecalho = implode("\n", array("From: $email_remetente", "Reply-To: $email_recebidoDe", "Return-Path: $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));

        if (mail($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_cabecalho)) {

            $msg = '<div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Mensagem enviada com sucesso!</strong> 
            </div>';
        } else {

            $msg = '<div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Erro ao enviar mensagem, tente novamente! </strong> 
            </div>';
        }
    } else {

        $msg = '<div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Preencha todos os campos!! </strong> 
            </div>';
    }
} else if (isset($_POST['btnSendOrcamento'])) {

    $msg = '';

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

    //valida se os campos não estão vazios
    if ((!empty($segmento)) 
        && (!empty($nome))
        && (!empty($cpfcnpj))
        && (!empty($endereco))
        && (!empty($bairro))
        && (!empty($cidade))
        && (!empty($estado))
        && (!empty($cep))
        && (!empty($email)) 
        && (!empty($telefone)) 
        && (!empty($celular)) 
        && (!empty($servico)) 
        && (!empty($descricao)) 
        && (!empty($conheceu))) {

        $email_remetente = "contato@matabem.com"; // deve ser uma conta de email do seu dominio 
        $email_destinatario = "contato@matabem.com"; // email que receberá as mensagens
        $email_recebidoDe = "$email";
        $email_assunto = "Solicitação de Orçamento"; // Este será o assunto da mensagem
        $email_conteudo = "SOLICITAÇÃO DE ORÇAMENTO \n"
                . "<br><b>Segmento:</b> " . $segmento
                . "<br><b>Nome:</b> " . $nome
                . "<br><b>CPF/CNPJ:</b> " . $cpfcnpj
                . "<br><b>Endereço:</b> " . $endereco
                . "<br><b>Bairro:</b> " . $bairro
                . "<br><b>Cidade:</b> " . $cidade
                . "<br><b>Estado:</b> " . $estado
                . "<br><b>Cep:</b> " . $cep
                . "<br><b>Email:</b> " . $email
                . "<br><b>Telefone:</b> " . $telefone
                . "<br><b>Celular:</b> " . $celular
                . "<br><br><b>DADOS DO SERVIÇO:</b> " 
                . "<br><b>Serviço:</b> " . $servico
                . "<br><b>Descrição:</b> " . $descricao
                . "<br><b>Como conheceu a Matabem:</b> " . $conheceu
                . "<br><br>"
                . "<hr>"
                . "<br>Solicitação de Orçamentom enviada por www.matabem.com";

        $email_cabecalho = implode("\n", array("From: $email_remetente", "Reply-To: $email_recebidoDe", "Return-Path: $email_remetente", "MIME-Version: 1.0", "X-Priority: 3", "Content-Type: text/html; charset=UTF-8"));

        if (mail($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_cabecalho)) {

            $msg = '<div class="alert alert-success alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Solicitação de orçamento enviada com sucesso!</strong> 
            </div>';
        } else {

            $msg = '<div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Erro ao enviar solicitação, tente novamente! </strong> 
            </div>';
        }
    } else {

        $msg = '<div class="alert alert-danger alert-dismissable">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Preencha todos os campos!! </strong> 
            </div>';
    }
}
        