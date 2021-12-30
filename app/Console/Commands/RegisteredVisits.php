<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class RegisteredVisits extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'registered:visits';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envía un correo con las visitas díaria del blog';

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
        $date_now = now()->format('Y-m-d');
        $visits = \DB::table('logs')->whereDate('created_at',$date_now)->get();

        Mail::to(env('MAIL_FROM_ADDRESS'))->bcc(env('MAIL_CONTACT_BCC'))->send(new SendMail($visits));
    }
}
