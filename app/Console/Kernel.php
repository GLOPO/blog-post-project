<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
<<<<<<< HEAD
    */
    protected function schedule(Schedule $schedule):void
    {
        //schedule->command('inspire')->hourly();
    }
    /**
     * Register the commands for the application.
     */
    protected function commands():void
=======
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
>>>>>>> b3246b188fcf6efceccbcf2e10fbce7b4a245fc6
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
