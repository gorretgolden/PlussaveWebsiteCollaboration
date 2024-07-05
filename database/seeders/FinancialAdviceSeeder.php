<?php

namespace Database\Seeders;

use App\Models\FinancialAdvice;
use Illuminate\Database\Seeder;

class FinancialAdviceSeeder extends Seeder
{
    public function run()
    {
        FinancialAdvice::factory()->count(10)->create();
    }
}
