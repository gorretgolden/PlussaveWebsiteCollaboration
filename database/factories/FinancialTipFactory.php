<?php

namespace Database\Factories;

use App\Models\FinancialTip;
use Illuminate\Database\Eloquent\Factories\Factory;

class FinancialTipFactory extends Factory
{

    protected $model = FinancialTip::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
        ];
    }
}
