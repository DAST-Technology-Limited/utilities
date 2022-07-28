<?php

namespace App\Mail;

use App\Models\Mail;
use App\Models\MailSender;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mailer extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(MailSender $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->
        to($this->data->reciever_email,$this->data->reciever_name)->
        from($this->data->sender_email,$this->data->sender_name)->
        subject($this->data->subject)->
        replyTo($this->data->sender_email,$this->data->sender_name)->
        view("emails.{$this->data->view}");
    }
}
