<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Biología',
            'Historia',
            'Tecnología',
            'Cocina',
            'Física',
            'Música',
            'Swift',
            'Libros',
            'Países',
            'Deportes'
        ];
    
        foreach ($categories as $name) {
            Category::firstOrCreate(['name' => $name]);
        }
    }
}
