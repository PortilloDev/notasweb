<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendCopyContactMail extends Mailable
{
    use Queueable, SerializesModels;
    public  $data_mail;
    public $subject = 'NotasWeb: Aviso email de Contacto';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data_mail)
    {
        $this->data_mail = $data_mail;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.copy-contact-mail');
    }
}
