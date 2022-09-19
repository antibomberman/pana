<?php

namespace Database\Seeders;

use App\Models\Breakfast;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BreakfastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Breakfast::create(['name' => 'Вегетарианский завтрак']);
        Breakfast::create(['name' => 'Континентальный завтрак']);
        Breakfast::create(['name' => 'Расширенный завтрак']);
        Breakfast::create(['name' => 'Английский завтрак']);
        Breakfast::create(['name' => 'Американский завтрак']);
        Breakfast::create(['name' => 'Завтрак с шампанским']);
        Breakfast::create(['name' => 'Поздний завтрак']);
        Breakfast::create(['name' => 'Шведский стол']);
        Breakfast::create(['name' => 'По меню']);
        Breakfast::create(['name' => 'Завтрак с собой']);
        Breakfast::create(['name' => 'Итальянский']);
        Breakfast::create(['name' => 'Традиционный английский/ирландский']);
        Breakfast::create(['name' => 'Веганский']);
        Breakfast::create(['name' => 'Халяльный']);
        Breakfast::create(['name' => 'Безглютеновый']);
        Breakfast::create(['name' => 'Кошерный']);
        Breakfast::create(['name' => 'Азиатский']);
    }
}
