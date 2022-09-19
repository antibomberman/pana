<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\City;
use App\Models\Housing;
use App\Models\Room;
use App\Models\RoomName;
use App\Models\RoomType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.c
     *
     * @return array<string, mixed>
     */

    protected $model = Room::class;

    public function definition()
    {
        return [
            'room_type_id' => RoomType::inRandomOrder()->first(),
            'room_name_id' => RoomName::inRandomOrder()->first(),
            'size' => rand(10,160),
            'base_price' => rand(500,20000),
            'smoking' => $this->faker->boolean,
            'disabled_people' => $this->faker->boolean,
            'count_copy' =>rand(0,9),
            'max_adult_count' =>rand(1,2),
            'max_child_count' =>rand(0,2),
            'max_baby_count' =>rand(0,2),
            'max_ped_count' =>rand(0,2),
        ];
    }
}
