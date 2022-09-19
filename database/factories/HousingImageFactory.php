<?php

namespace Database\Factories;

use App\Models\Breakfast;
use App\Models\Category;
use App\Models\City;
use App\Models\Comfort;
use App\Models\Housing;
use App\Models\HousingBreakfast;
use App\Models\HousingComfort;
use App\Models\HousingImage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HousingImage>
 */
class HousingImageFactory extends Factory
{
    /**
     * Define the model's default state.c
     *
     * @return array<string, mixed>
     */

    protected $model = HousingImage::class;

    public function definition()
    {
        return [
            'path' => 'test/test_home.jpg',
        ];
    }
}
