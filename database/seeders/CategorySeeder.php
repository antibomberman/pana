<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Отель',
            'description' => 'Отели, гостевые дома, хостелы, отели типа «постель и завтрак», апарт-отели'
        ]);
        Category::create([
            'name' => 'Апартаменты',
            'description' => 'Небольшой отель обычно от 10 до 100 номеров в уникальном оформлении'
        ]);
    }
}
