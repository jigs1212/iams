<?php

namespace App\Jobs;

use App\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Mail\Mailer;
use Mail;

class SendEmailToUsers extends Job implements SelfHandling
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->userReg = $userReg;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(Mailer $mailer)
    {
        $user['email'] = $this->contact_us_messages->email;
        $user['sender'] = $this->contact_us_messages->name;
        $user['message'] = $this->contact_us_messages->message;
        Mail::send('emails.feedback', ['user' =>$user], function ($m) use($user) {
           $m->from($user['email'], $user['sender']);
           $m->to('mailme.jigs@gmail.com', 'support')->subject('Feedback');
       });
    }
}
