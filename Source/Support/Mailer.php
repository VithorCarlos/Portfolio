<?php

namespace Source\Support;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use Source\App\Controllers\Page;

class Mailer
{
    private object $mail;
    private object $page;
    const MAILER_ERROR = 'error_email';

    public function __construct()
    {
        $this->mail = new PHPMailer(true);
        $this->page = new Page();

        try {
            $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;

            $this->mail->isSMTP();

            $this->mail->Host = MAILER['host'];

            $this->mail->Port = MAILER['port'];

            $this->mail->SMTPAuth = MAILER['smtp_auth'];

            $this->mail->SMTPSecure = MAILER['smtp_secure'];

            $this->mail->Username = MAILER['username'];

            $this->mail->Password = MAILER['password'];

        } catch (\Exception $e) {
            $error = new Error;
            $error->setMessage($e->getMessage(), Mailer::MAILER_ERROR);
            header("Location: /forgot");
            exit;
        }
    }

    public function attach(string $filepath, string $filename): Mailer
    {
        $this->mail->attach[$filepath] = $filename;
        return $this;
    }

    public function add(string $toEmail, string $toName, string $subject, string $link): Mailer
    {
        try {    
            $this->mail->setFrom(MAILER['username'], MAILER['name']);

            $this->mail->addAddress($toEmail, $toName);

            $this->mail->Subject = utf8_decode($subject);

            $this->mail->msgHTML(utf8_decode($this->page->mailerTemplate('email/forgot-body.html', ['link' => $link])));

            $this->mail->isHTML(true); 

            if(!empty($this->mail->attach)){
                foreach ($this->mail->attach as $path => $name) {
                    $this->mail->addAttachment($path, $name);
                }
            }

            return $this;

        } catch (\Exception $e) {
            $error = new Error;
            $error->setMessage($e->getMessage(), Mailer::MAILER_ERROR);
            header("Location: /forgot");
            exit;
        }
    }

    public function send(): bool
    {
       return $this->mail->send();
    }
}