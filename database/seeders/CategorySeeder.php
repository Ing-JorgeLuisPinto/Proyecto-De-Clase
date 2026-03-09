<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
   
    public function run(): void
    {
        $category1 = new Category();
        $category1->name = 'Electrodomesticos';
        $category1->description = 'Esta es la descripcion del electrodomestico';
        $category1->save();

        $category2 = new Category();
        $category2->name = 'Tecnologia';
        $category2->description = 'Esta es la descripcion del tecnologia';
        $category2->save();
    }
}
