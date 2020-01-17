<?php
//seta a codificação de caracteres padrão para UTF-8
ini_set( 'default_charset', 'utf-8');

$nome = "$_POST[nome]";
$email = "$_POST[email]";
$receptor = "contato@joaolutz.com"; //seu email
$emailsender = "sender@joaolutz.com"; //e-mail de envio
$assunto = "$_POST[assunto]"; //assunto
$mensagem = "$_POST[mensagem]"; //mensagem

//concatena os dados do remetente para identificação no corpo da mensagem.
$mensagemEmail = "De: ".$nome."\nE-mail: ".$email."\n\n".$mensagem;

// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
$headers = "MIME-Version: 1.1\n";
$headers .= "Content-type: text/plain; charset=utf-8\n";
$headers .= "From: João Lutz <sender@joaolutz.com>"."\n"; // remetente
$headers .= "Return-Path: João Lutz <sender@joaolutz.com>"."\n"; // return-path

$btnEnviar = "$_POST[btnEnviar]";
$btnLimpar = "$_POST[btnLimpar]";

if($btnEnviar)
{
	if (($nome == "") || ($email == "") || ($assunto == "") || ($mensagem == "")) 
	{
		echo "<span style=\"color:red;\">Aten&ccedil;&atilde;o, todos os campos devem ser preenchidos.</span>";
	}
	else
	{
		if(validaEmail($email))
		{
			if(mail($receptor, $assunto, $mensagemEmail, $headers ,"-r".$emailsender))
			{
				$nome = "";
				$email = "";
				$assunto = "";
				$mensagem = "";
				echo "Mensagem enviada com sucesso!";
			}
			else
			{
				$headers .= "Return-Path: ".$emailsender."\n"; // Se "não for Postfix"
				if(mail($receptor, $assunto, $mensagemEmail, $headers))
				{
					$nome = "";
					$email = "";
					$assunto = "";
					$mensagem = "";
					echo "Mensagem enviada com sucesso!";
				}
				else
				{
					echo "<span style=\"color:red;\">Falha no envio da mensagem.</span>";
				}
			}
		}
		else
		{
			echo "<span style=\"color:red;\">Formato de e-mail inv&aacute;lido! Informe um e-mail v&aacute;lido.</span>";
		}
	}
}

if($btnLimpar)
{
	$nome = "";
	$email = "";
	$assunto = "";
	$mensagem = "";
}

function validaEmail($email) {
$conta = "^[a-zA-Z0-9\._-]+@";
$domino = "[a-zA-Z0-9\._-]+.";
$extensao = "([a-zA-Z]{2,4})$";
$pattern = $conta.$domino.$extensao;

if (ereg($pattern, $email))
	return true;
else
	return false;
}

?>