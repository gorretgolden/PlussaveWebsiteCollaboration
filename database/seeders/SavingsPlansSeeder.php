<?php

namespace Database\Seeders;

use App\Models\SavingsPlan;
use Illuminate\Database\Seeder;

class SavingsPlansSeeder extends Seeder
{
    public function run()
    {
        SavingsPlan::factory()->count(10)->create();
    }
}
