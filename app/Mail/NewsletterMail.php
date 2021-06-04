<?php

namespace App\Mail;

use App\Models\NewsLetter;
use App\Models\Subscription;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterMail extends Mailable
{
    use Queueable, SerializesModels;
    private $content, $subscriber;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(NewsLetter $content, Subscription $subscriber)
    {
        $this->content = $content;
        $this->subscriber = $subscriber;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->withSwiftMessage(function ($message) {
            $message->setPriority(\Swift_Message::PRIORITY_HIGHEST);
        })->subject($this->content->title . ' - GA Engineering')
        ->from('info@gaengineering.et', 'GA Engineering')
        ->view('email.newsletter')
        ->with(['content' => $this->content, 'subscriber' => $this->subscriber]);
    }
}
