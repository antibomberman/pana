<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\RoomName;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoomName::create(['name' => 'Одноместный с видом на горы']);
    }
}
