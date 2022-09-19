<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            Role::create(['id' => 1,'name' => 'клиент']);
            Role::create(['id' => 2,'name' => 'организатор жилья']);
            Role::create(['id' => 3,'name' => 'Админ']);
            Role::create(['id' => 4,'name' => 'Модератор']);
        }catch (\Exception $exception){
            dump($exception);
        }
    }
}
