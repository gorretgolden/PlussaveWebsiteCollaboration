<?php

namespace Database\Seeders;

use App\Models\FinancialTip;
use Illuminate\Database\Seeder;

class FinancialTipsSeeder extends Seeder
{
    public function run()
    {
        $tips = [
            [
                'title' => 'Create a Budget',
                'content' => 'Track your income and expenses to understand where your money is going. Create a budget to manage your finances effectively.'
            ],
            [
                'title' => 'Build an Emergency Fund',
                'content' => 'Set aside money for unexpected expenses. Aim to save at least three to six months’ worth of living expenses.'
            ],
            [
                'title' => 'Pay Off High-Interest Debt First',
                'content' => 'Focus on paying off high-interest debt first. Consider consolidating your debts to lower your interest rates.'
            ],
            [
                'title' => 'Automate Your Savings',
                'content' => 'Set up automatic transfers to your savings account. This ensures that you save consistently without having to think about it.'
            ],
            [
                'title' => 'Invest Early and Regularly',
                'content' => 'Start investing as early as possible to take advantage of compound interest. Contribute regularly to build wealth over time.'
            ],
            [
                'title' => 'Review Your Insurance Coverage',
                'content' => 'Make sure you have adequate insurance coverage for health, life, home, and auto. Insurance can protect you from significant financial losses.'
            ]
        ];

        foreach ($tips as $tip) {
            FinancialTip::create($tip);
        }

    }
}
