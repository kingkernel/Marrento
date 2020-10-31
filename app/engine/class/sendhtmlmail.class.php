<?php
/**
###############################################################################
	arquivo: sendhtmlmail.class.php
	Data de criação: 30/10/2020
	Ultima Alteração: 30/10/2020
	Autor: Daniel J. Santos
	Email: Daniel.santos.ap@gmail.com
###############################################################################
**/
	class sendhtmlmail 
	{
		public $sender;
		public $to;
		public $template;
		public $subject;
		public $header;
		public $mensagem;

		public function __construct()
		{
		
		}
		public function content()
		{
			$sender = $this->sender;
			$to = $this->to;
			$header = "MIME-Version: 1.0	\r\n";
			$header .= 'Content-type: text/html; charset=iso-8859-1;' . "\r\n";
			$header .= 'Return-Path: ';
			$header .= $sender;
			$header .=" \r\n";
			$header .= "From: $to \r\n";
			$header .= "Reply-To: $this->sender \r\n";
			$mensagem = "<h1>Olá tudo bem?</h1>";
			$mensagem .= "Aqui vem a <b>mensagem</b> do email. <br />";
			$mensagem .= "Att. <br /> <b>Daniels Hogans</b>";
			$this->mensagem = $mensagem;
			$this->header = $header;
			return $this->mensagem; $this->header;
		}
		public function send()
		{
			if(mail($this->to, $this->subject, $this->mensagem, $this->header))
			{
				echo "Mensagem enviada com sucesso.!!!";
			}
			else
			{
				echo "Sua mensagem não pode ser enviada. Tente novamente.";
			};
		}
	}
?>