<?php

namespace Database\Seeders;

use App\Models\SavingsPlan;
use Illuminate\Database\Seeder;

class SavingsPlansSeeder extends Seeder
{
    public function run()
    {
        $plans = [
            [
                'name' => 'Retirement Savings Plan',
                'description' => 'Save for your retirement with tax-advantaged retirement accounts like a 401(k) or IRA. Contribute regularly to build a substantial retirement fund.'
            ],
            [
                'name' => 'College Savings Plan',
                'description' => 'Start saving early for your children’s education. Consider opening a 529 college savings plan for tax benefits.'
            ],
            [
                'name' => 'Down Payment Savings Plan',
                'description' => 'Save for a down payment on a home. Set a savings goal and contribute a fixed amount each month to reach your target.'
            ],
            [
                'name' => 'Vacation Savings Plan',
                'description' => 'Plan and save for your dream vacation. Create a vacation fund and contribute regularly to avoid going into debt for your travels.'
            ],
            [
                'name' => 'Medical Expense Savings Plan',
                'description' => 'Save for medical expenses not covered by insurance. Consider opening a Health Savings Account (HSA) for tax benefits.'
            ],
            [
                'name' => 'Wedding Savings Plan',
                'description' => 'Start saving early for your wedding expenses. Create a budget and stick to it to ensure you don’t overspend on your big day.'
            ]
        ];

        foreach ($plans as $plan) {
            SavingsPlan::create($plan);
        }
    }

}
