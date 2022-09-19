<?php

namespace Database\Factories;

use App\Models\Breakfast;
use App\Models\Category;
use App\Models\City;
use App\Models\Comfort;
use App\Models\Housing;
use App\Models\HousingBreakfast;
use App\Models\HousingComfort;
use App\Models\HousingLanguage;
use App\Models\Language;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HousingLanguage>
 */
class HousingLanguageFactory extends Factory
{
    /**
     * Define the model's default state.c
     *
     * @return array<string, mixed>
     */

    protected $model = HousingLanguage::class;

    public function definition()
    {
        return [
            'language_id' => Language::inRandomOrder()->first()->id,
        ];
    }
}
