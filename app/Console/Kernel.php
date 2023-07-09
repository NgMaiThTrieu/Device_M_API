<?php

namespace App\Console;

use App\Models\BorrowingDetail;
use App\Models\DeviceBorrowingForm;
use DateTime;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {
            $targetDate = Carbon::now()->format('Y-m-d');

            $borrowingForms = DeviceBorrowingForm::where('Status', 1)
                ->where('Due_Date', '<', $targetDate)
                ->get();

            foreach ($borrowingForms as $form) {
                $form->status = 2;
                $form->save();
            }
        })->everyMinute(); // Chạy tác vụ hàng ngày
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
