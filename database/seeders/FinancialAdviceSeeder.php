<?php

namespace Database\Seeders;

use App\Models\FinancialAdvice;
use Illuminate\Database\Seeder;

class FinancialAdviceSeeder extends Seeder
{
    public function run()
    {$contentList = [
        [
            'title' => 'John Doe',
            'content' => 'Invest in a diversified portfolio to reduce risk. Consider a mix of stocks, bonds, and other assets to achieve your financial goals.'
        ],
        [
            'title' => 'Jane Smith',
            'content' => 'Regularly review your financial plan and make adjustments as needed. Stay informed about changes in the market and your personal financial situation.'
        ],
        [
            'title' => 'Robert Johnson',
            'content' => 'Take advantage of employer matching contributions in your retirement plan. It’s essentially free money that can significantly boost your retirement savings.'
        ],
        [
            'title' => 'Emily Davis',
            'content' => 'Set specific financial goals and create a plan to achieve them. Break down your goals into manageable steps and track your progress.'
        ],
        [
            'title' => 'Michael Brown',
            'content' => 'Build and maintain a good credit score. Pay your bills on time, keep your credit card balances low, and avoid opening too many new accounts at once.'
        ],
        [
            'title' => 'Sarah Wilson',
            'content' => 'Understand your risk tolerance when investing. Choose investments that align with your risk tolerance and financial goals.'
        ]
    ];

    foreach ($contentList as $content) {
        FinancialAdvice::create($content);
    }
    }
}
