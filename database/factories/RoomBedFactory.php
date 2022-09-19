<?php

namespace Database\Factories;

use App\Models\Bed;
use App\Models\Breakfast;
use App\Models\Category;
use App\Models\City;
use App\Models\Comfort;
use App\Models\Housing;
use App\Models\HousingBreakfast;
use App\Models\HousingComfort;
use App\Models\HousingLanguage;
use App\Models\Language;
use App\Models\RoomBed;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RoomBed>
 */
class RoomBedFactory extends Factory
{
    /**
     * Define the model's default state.c
     *
     * @return array<string, mixed>
     */

    protected $model = RoomBed::class;

    public function definition()
    {
        return [
            'bed_id' => Bed::inRandomOrder()->first()->id,
        ];
    }
}
