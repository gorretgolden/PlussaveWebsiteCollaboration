<?php

namespace Database\Seeders;

use App\Models\FinancialTip;
use Illuminate\Database\Seeder;

class FinancialTipsSeeder extends Seeder
{
    public function run()
    {
        FinancialTip::factory()->count(10)->create();
    }
}
