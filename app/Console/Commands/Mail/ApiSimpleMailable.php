<?php

namespace App\Console\Commands\Mail;

use Illuminate\Console\Command;
use Swift_Events_SendEvent;

class ApiSimpleMailable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sendgrid:mail-api-simple-mailable';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        \Mail::getSwiftMailer()->registerPlugin(new MailTracker());
        \Mail::to(env('AUTHOR_EMAIL'), 'tester')
            ->cc("ichikawa.shingo.0829+cc@gmail.com")
            ->bcc("ichikawa.shingo.0829+bcc@gmail.com")
            ->send(new \App\Mail\ApiSimpleMailable());
    }
}
class MailTracker implements \Swift_Events_SendListener
{
    /**
     * Invoked immediately before the Message is sent.
     *
     * @param Swift_Events_SendEvent $evt
     */
    public function beforeSendPerformed(Swift_Events_SendEvent $evt)
    {
    }
    /**
     * Invoked immediately after the Message is sent.
     *
     * @param Swift_Events_SendEvent $evt
     */
    public function sendPerformed(Swift_Events_SendEvent $evt)
    {
        \Log::info('X-Message-ID:' . $evt->getMessage()->getHeaders());
    }
}
