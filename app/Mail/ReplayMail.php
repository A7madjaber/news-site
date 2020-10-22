<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReplayMail extends Mailable
{
    use Queueable, SerializesModels;
    public $title;
    public $content;
    public $to_email;

    public function __construct($title, $content, $to_email)
    {
        $this->title = $title;
        $this->content = $content;
        $this->to_email = $to_email;
    }

    public function build()
    {
        $header_text = $this->title;
        return $this->from('site@pp.com', 'اخباركم')

            ->subject($this->title)->view('mail.replay', compact(['content', 'title', 'header_text']));

    }
}
