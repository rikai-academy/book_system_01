<?php

namespace App\Console;

use App\Enums\CartStatus;
use App\Exports\CartsExport;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            DB::table('cart')->where('status',CartStatus::DONE)->delete();
        })->lastDayOfMonth('23:59')
        ->before(function () {
            return (new CartsExport)->download('accepted request-'.Carbon::now().'.xlsx');
        })
        ->name("Monthly Request Delete")
        ->emailOutputTo(env('MAIL_TO'));
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
