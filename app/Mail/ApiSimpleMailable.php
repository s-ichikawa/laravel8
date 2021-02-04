<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Sichikawa\LaravelSendgridDriver\SendGrid;

class ApiSimpleMailable extends Mailable
{
    use Queueable, SerializesModels, SendGrid;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->view([])
            ->sendgrid([
                'personalizations' => [
                    [
                        'to' => [
                            'email' => 'ichikawa.shingo.0829@gmail.com',
                            'name'  => 's-ichikawa1',
                        ],
                        'dynamic_template_data' => [
                            'name' => 'Shingo Ichikawa',
                            'author' => 's-ichikawa',
                            'title' => 'of this mail'
                        ],
                    ],
                ],
                'template_id' => config('services.sendgrid.templates.laravel_test')
            ]);
    }
}
