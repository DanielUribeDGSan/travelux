<?php

namespace App\Mail;

use App\Models\Travel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailCotizacion extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $travel, $years = [];

    public function __construct(Travel $travel, $years = [])
    {
        $this->travel = $travel;
        $this->years = $years;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mails.mail-cotizacion')->from('daniel.uribe.garcia07@gmail.com', 'Travelux')
            ->subject('Nuevo viaje para cotizar');
    }
}
