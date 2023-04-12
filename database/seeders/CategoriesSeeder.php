<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Orgânicos', 'Caseiros', 'Artesanais', 'Vegetarianos', 'Veganos', 'Sem Lactose', 'Sem glúten', 'Light', 'Diet', 'Fit', 'Sem conservantes'
        ];

        foreach ($categories as $key => $value) {
            $category = new Category(['name' => $value]);
            $category->save();
        }
    }
}
