<?php

namespace Database\Factories;

use App\Models\SavingsPlan;
use Illuminate\Database\Eloquent\Factories\Factory;

class SavingsPlanFactory extends Factory
{
    protected $model = SavingsPlan::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->paragraph,
        ];
    }
}
