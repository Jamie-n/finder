<?php

namespace Database\Factories;

use App\Models\Year;
use Illuminate\Database\Eloquent\Factories\Factory;

class YearFactory extends Factory
{
    protected $model = Year::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'year_of_manufacture'=> $this->faker->year,
        ];
    }
}
