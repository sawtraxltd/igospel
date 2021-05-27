<?php

namespace App\Mail;

use App\Models\Webinar;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WebinarRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $webinar;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Webinar $webinar)
    {
        $this->webinar = $webinar;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.webinar')
            ->subject( config('app.name')  .' Registration Confirmation');
    }
}
