<?php

namespace Database\Factories;

use App\Models\FinancialAdvice;
use Illuminate\Database\Eloquent\Factories\Factory;

class FinancialAdviceFactory extends Factory
{
    protected $model = FinancialAdvice::class;

    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'content' => $this->faker->paragraph,
        ];
    }
}
