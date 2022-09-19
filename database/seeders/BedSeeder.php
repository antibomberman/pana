<?php

namespace Database\Seeders;

use App\Models\Bed;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bed::create(['name' => 'Односпальняя/ ширина 90-130 см']);
    }
}
