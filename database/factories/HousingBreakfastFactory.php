<?php

namespace Database\Factories;

use App\Models\Breakfast;
use App\Models\Category;
use App\Models\City;
use App\Models\Housing;
use App\Models\HousingBreakfast;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HousingBreakfast>
 */
class HousingBreakfastFactory extends Factory
{
    /**
     * Define the model's default state.c
     *
     * @return array<string, mixed>
     */

    protected $model = HousingBreakfast::class;

    public function definition()
    {
        return [
            'breakfast_id' => Breakfast::inRandomOrder()->first()->id,
        ];
    }
}
