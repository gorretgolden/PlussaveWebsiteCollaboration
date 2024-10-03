<?php

namespace Database\Seeders;

use App\Models\OtherFinancialService;
use Illuminate\Database\Seeder;

class OtherFinancialServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            ['title' => 'Insurance', 'description' => 'Comprehensive insurance services to protect your assets.', 'icon' => 'insurance-icon'],
            ['title' => 'Agency Banking', 'description' => 'Convenient banking services through our agency network.', 'icon' => 'agency-banking-icon'],
            ['title' => 'Mobile Banking', 'description' => 'Manage your finances on the go with mobile banking.', 'icon' => 'mobile-banking-icon'],
            ['title' => 'Forex Exchange', 'description' => 'Competitive rates for foreign currency exchange.', 'icon' => 'forex-exchange-icon'],
        ];

        foreach ($services as $service) {
            OtherFinancialService::create($service);
        }
    }
}
