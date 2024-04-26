<?php

namespace App\Mail;

use App\Models\Client;
use App\Models\Property;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ChatSend extends Mailable
{
    use Queueable, SerializesModels;

    private $request;
    /**
     * @var Client
     */
    private $client;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, Client $client, Property $property = null)
    {
        $this->request = $request;
        $this->client = $client;
        $this->property = $property;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('DeveloPro - masz nową wiadomość: '.$this->request['page_name'])->view('front.mail.form',
            [
                'request' => $this->request,
                'client' => $this->client,
                'property' => $this->property
            ]);
    }
}
