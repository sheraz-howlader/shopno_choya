<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public array $data){}

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address($this->data['from'] ?? config('mail.from.address'),
                config('mail.from.name')
            ),
            cc: [
                new Address($this->data['cc'] ?? ''),
            ],
            bcc: [
                new Address($this->data['bcc'] ?? ''),
            ],
            replyTo: [
                new Address($this->data['reply_to'] ?? ''),
            ],
            subject: $this->data['subject'] ?? config('app.name'),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: $this->data['template'],
            markdown: $this->data['template'],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
