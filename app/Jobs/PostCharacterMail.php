<?php

namespace EVEMail\Jobs;

use Carbon\Carbon;
use EVEMail\Token;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use EVEMail\Http\Controllers\EVEController;
use EVEMail\Http\Controllers\MailController;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

class PostCharacterMail implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    public $token, $payload, $eve, $mail;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Token $token, $payload)
    {
        $this->eve = new EVEController();
        $this->mail = new MailController();
        $this->payload = $payload;
        $this->token = $token;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->eve->post_character_mail($this->token, $this->payload);
        $this->mail->get_character_mail_headers($this->token);
        $this->mail->process_queue();
    }

}