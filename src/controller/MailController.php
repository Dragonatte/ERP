<?php
namespace Rmb\Erp\controller;

use Rmb\Erp\model\MailModel;

require_once '../../model/MailModel.php';
class MailController
{
    public static function sendMail(string $from, string $to, string $subject, string $message): bool
    {
        $mail = new MailModel('rodrigomurillo99@gmail.com', 'zutu gcbz fplh qgam');
        return $mail->send($from, $to, $subject, $message);
    }
}