<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class Emails extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $ic;
    public $email;
    public $phone;
    public $file;
    public $subject;
    public $message1;

    /**
     * Create a new message instance.
     */
    public function __construct($name, $ic, $email, $phone, $file, $subject, $message1)
    {
        $this->name = $name;        
        $this->ic = $ic;        
        $this->email = $email;
        $this->phone = $phone;
        $this->file = $file;
        $this->subject = $subject;
        $this->message1 = $message1;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->subject,

        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.name', //Replace with your actual view name
            with: [
                'name' => $this->name,
                'ic' => $this->ic,
                'email' => $this->email,
                'phone' => $this->phone,
                'message1' => $this->message1,
                //'file' => $this->file,
            ],
        );
       
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
{
    $attachments = [];

    if (is_string($this->file) && file_exists($this->file)) {
        // Single file
        $attachments[] = Attachment::fromPath($this->file)->as(basename($this->file));;
    } elseif (is_array($this->file)) {
        // Multiple files
        foreach ($this->file as $filePath) {

            //dd($filePath['path']);
            if (file_exists($filePath['path'])) {
                $attachments[] = Attachment::fromPath($filePath['path'])->as(basename($filePath['name']));
            }
        }
    }

    return $attachments;
}
}
