<?php

namespace Database\Seeders;

use App\Models\Country;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create(['name' => 'Казахстан'])->cities()->createMany([
            ['name' => 'Алматы'],
            ['name' => 'Астана'],
            ['name' => 'Шымкент'],
        ]);
        Country::create(['name' => 'Россия'])->cities()->createMany([
            ['name' => 'Москва'],
        ]);
        Country::create(['name' => 'Узбекистан'])->cities()->createMany([
            ['name' => 'Ташкент'],
        ]);
        Country::create(['name' => 'Турция'])->cities()->createMany([
            ['name' => 'Стамбул'],
            ['name' => 'Анкара'],
        ]);
        Country::create(['name' => 'ОАЭ'])->cities()->createMany([
            ['name' => 'Дубай'],
        ]);
    }
}
