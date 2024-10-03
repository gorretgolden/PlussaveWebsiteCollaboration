<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\WorkingHour;
use Carbon\Carbon;

class UpdateWorkingHours extends Command
{
    // The name and signature of the console command.
    protected $signature = 'workinghours:update';

    // The console command description.
    protected $description = 'Update working hours and set is_closed to true if the current time is past the closing time';

    // Execute the console command.
    public function handle()
    {
        // Get the current day and time
        $now = Carbon::now();
        $currentDay = $now->format('l');  // Getting the current day, e.g Monday
        $currentTime = $now->format('H:i'); // Getting the current time, e.g '21:00' for 9 PM


        $workingHours = WorkingHour::where('day', $currentDay)
            ->where('is_closed', false) // Only update if not already closed
            ->first();

        if ($workingHours) {
            // Check if current time is past the closing time
            if ($currentTime >= $workingHours->closing_time) {
                // Set is_closed to true for the day
                $workingHours->is_closed = true;
                $workingHours->save();
                $this->info("Closed working hours for $currentDay after $workingHours->closing_time");
            } else {
                $this->info("Working hours for $currentDay are still open.");
            }
        } else {
            $this->info("No working hours found for $currentDay.");
        }
    }
}
