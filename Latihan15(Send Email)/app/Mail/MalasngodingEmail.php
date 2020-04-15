<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MalasngodingEmail extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('rizaldi.naldian@gmail.com') // nama pengrim email
            ->view('email')
            ->with(
                [
                    'nama' => 'Rizaldi Alfarabi Hadi',
                    'website' => 'www.rizaldinaldianputra.com',
                ]
            );
    }
}
