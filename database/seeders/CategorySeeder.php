<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::updateOrCreate(['name' => '']);
        Category::updateOrCreate(['name' => 'Musik']);
        Category::updateOrCreate(['name' => 'Film']);
        Category::updateOrCreate(['name' => 'Makanan']);
        Category::updateOrCreate(['name' => 'Seni']);
        Category::updateOrCreate(['name' => 'Budaya']);
    }
}
