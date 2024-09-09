<?php

namespace App\Services;

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

trait MailSender
{
    public function emailSend($data): void
    {
        Mail::to($data['mail_to'])->send(new SendMail($data));
    }
}
