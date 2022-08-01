<?php

namespace App\Console;

use App\Http\Controllers\SMSController;
use App\Mail\Mailer;
use App\Models\MailSender;
use App\Models\SMS;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Mail;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();

        $schedule->call(function(){
            $mails =  MailSender::all();
            foreach($mails as $mail){
               try {
                Mail::to($mail->reciever_email)->send(new Mailer($mail));
                $sent = MailSender::where("reciever_email",$mail->reciever_email);
                $sent->delete();

               } catch (\Throwable $th) {
               }
            }           
        })->everyMinute();

        $schedule->call(function(){
            $sms =  SMS::all();
            foreach($sms as $sm){
               try {
               SMSController::deliverMessage($sm);
               $sent = SMS::where("id",$sm->id);
                $sent->delete();

               } catch (\Throwable $th) {
            //   dd($th);
               }
            }           
        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
