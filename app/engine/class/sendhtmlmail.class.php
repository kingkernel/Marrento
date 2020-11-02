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
		public $message;

		public function __construct()
		{
		
		}
		public function loadtemplate($template, $fields)
		{
			$html = subsfields($template, $fields);
			$this->message = $html;
			return $this->message;
		}
		public function send()
		{
			$sender = $this->sender;
			$to = $this->to;
			$header = "MIME-Version: 1.0	\r\n";
			$header .= 'Content-type: text/html; charset=utf-8;' . "\r\n";
			$header .= 'Return-Path: daniel.mogi@kingkernel.com.br';
			$header .= $sender;
			$header .=" \r\n";
			$header .= "From: $to \r\n";
			$header .= "Reply-To: $this->sender \r\n";
			$this->header = $header;
			if(mail($this->to, $this->subject, $this->message, $this->header))
			{
				echo 'ok';
			}
			else
			{
				echo "Sua mensagem não pode ser enviada. Tente novamente.";
			};
		}
	}
?>