<?php

namespace App\Console;

use App\Models\User;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\PerizinanPendirian;
use Illuminate\Support\Facades\Mail;
use App\Mail\UnchangedFieldEmail;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule)
    {

        $schedule->call(function () {
            \Log::info('Scheduler berjalan pada: ' . now());
        })->daily();

        $schedule->call(function () {
            $threeDaysAgo = now()->subDays(3);

            $result = PerizinanPendirian::where('status_dokumen', 'Dokumen Sesuai')
                ->where('updated_at', '<=', $threeDaysAgo)
                ->get();



            if ($result->isNotEmpty()) {
                
                foreach ($result as $pendirian) {
                    $roleName = 'kepala-dinas';
                    $usersWithRole = User::role($roleName)->get();

                    \Log::info($pendirian);
                    Mail::to($usersWithRole[0]->email)->send(new UnchangedFieldEmail($pendirian->id, $pendirian->nama));
                }
            }
        })->everySecond();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
