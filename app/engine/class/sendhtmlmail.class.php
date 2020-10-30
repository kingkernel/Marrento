<?php
	class sendhtmlmail 
	{
		private $sender;
		private $to;
		public $template;
		public $subject;
		public $header;

		public function __construct()
		{
			// Dados de Envio
			$email_enviar = "Nome de Identificação <email@dominio.com.br>";
			$assunto = "Assunto do Email";

			$this->header = 'MIME-Version: 1.0' . "\r\n";
			$this->header .= 'Content-type: text/html; charset=iso-8859-1;' . "\r\n";
			$this->header .= "Return-Path: $email_enviar \r\n";
			$this->header .= "From: $email_enviar \r\n";
			$this->header .= "Reply-To: $email_enviar \r\n";			
		}
		public function content()
		{
			$mensagem = "<h1>Titulo do Email</h1>";
			$mensagem .= "Aqui vem a <b>mensagem</b> do email. <br />";
			$mensagem .= "Att. <br /> <b>Mauricio Programador</b>";
		}
		public function send()
		{
			// Envia o Email
			if(mail($email_enviar, $assunto, $mensagem, $cabecalho))
			{
				echo "Mensagem enviada com sucesso.";
			}
			else
			{
				echo "Sua mensagem não pode ser enviada. Tente novamente.";
			};
		}
	}
?>