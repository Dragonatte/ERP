<?php

namespace Rmb\Erp\model;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once '../../../vendor/autoload.php';

class MailModel
{
    private PHPMailer $_mailer;

    public function __construct(string $user, string $pass)
	{
		$this->_mailer = new PHPMailer(true);
		$this->_mailer->SMTPDebug = 0;
		$this->_mailer->isSMTP();
		$this->_mailer->Host = 'smtp.gmail.com';
		$this->_mailer->SMTPAuth = true;
		$this->_mailer->Username = $user;
		$this->_mailer->Password = $pass;
	}

    public function send(string $from, string $to, string $subject, string $body, string $altBody = '', string $attachment = '', string $attachmentName = '', string $cc = ''): bool
	{
		try {
			$this->_mailer->setFrom($from);
			$this->_mailer->addAddress($to);
			if ($attachment != '') {
				$this->_mailer->addAttachment($attachment, $attachmentName);
			}
			if ($cc != '') {
				$this->_mailer->addCC($cc);
			}
			$this->_mailer->isHTML();
			$this->_mailer->Subject = $subject;
			$this->_mailer->Body = $body;
			$this->_mailer->AltBody = $altBody;
			$this->_mailer->send();
			return true;
		} catch (Exception) {
			return false;
		}
	}

}