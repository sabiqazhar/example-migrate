<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name_category' => "Paket Ayam Panggang Kuy Hemat"],
            ['name_category' => "Paket Ayam Panggang Kuy Kenyang"],
            ['name_category' => "Paket Ayam Panggang Kuy Kekinian"],
            ['name_category' => "Paket Ayam Panggang Kuy Double Hemat"],
            ['name_category' => "Paket Ayam Panggang Kuy Double Karbo"],
            ['name_category' => "Paket Ayam Panggang Kuy Santuy"],
            ['name_category' => "Ala Carte"],
            ['name_category' => "Non Coffee"],
            ['name_category' => "Coffee"],
        ];

        Category::insert($data);
    }
}
