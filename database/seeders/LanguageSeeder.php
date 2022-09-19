<?php

namespace Database\Seeders;

use App\Models\Language;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create(['name' => 'Казахский']);
        Language::create(['name' => 'Русский']);
        Language::create(['name' => 'Английский']);
    }
}
