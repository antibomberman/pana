<?php

namespace Database\Seeders;

use App\Models\Housing;
use App\Models\HousingBreakfast;
use App\Models\HousingComfort;
use App\Models\HousingImage;
use App\Models\HousingLanguage;
use App\Models\Role;
use App\Models\Room;
use App\Models\RoomBed;
use App\Models\RoomComfort;
use App\Models\RoomImage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HousingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Housing::factory()
            ->has(HousingBreakfast::factory()->count(4),'breakfasts')
            ->has(HousingComfort::factory()->count(6),'comforts')
            ->has(HousingImage::factory()->count(3),'images')
            ->has(HousingLanguage::factory()->count(3),'languages')
            ->has(
                Room::factory()
                    ->has(RoomBed::factory()->count(2),'beds')
                    ->has(RoomComfort::factory()->count(2),'comforts')
                    ->has(RoomImage::factory()->count(2),'images')
                    ->count(4),
                'rooms'
            )
            ->count(50)
            ->create();
    }
}
