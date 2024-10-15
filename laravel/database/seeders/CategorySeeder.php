<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Sneakers', 'color' => 'blue'],
            ['name' => 'Boots', 'color' => 'red'],
            ['name' => 'Running', 'color' => 'green'],
            ['name' => 'Slides', 'color' => 'purple'],
            ['name' => 'Sandals', 'color' => 'orange'],
            ['name' => 'Hiking', 'color' => 'yellow'],
        ];

        foreach ($categories as $category) {
            Category::create([
                'category_name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'color' => $category['color'], 
            ]);
        }
    }
}
