<?php

namespace Database\Seeders;

use App\Models\Comfort;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComfortSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comfort::create(['name' => 'Wi-fi']);
        Comfort::create(['name' => 'Сад']);
        Comfort::create(['name' => 'Парковка']);
    }
}
