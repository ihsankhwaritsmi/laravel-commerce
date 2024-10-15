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
            ['name' => 'Electronics', 'color' => 'blue'],
            ['name' => 'Fashion & Apparel', 'color' => 'red'],
            ['name' => 'Home & Kitchen', 'color' => 'green'],
            ['name' => 'Health & Beauty', 'color' => 'purple'],
            ['name' => 'Sports & Outdoors', 'color' => 'orange'],
            ['name' => 'Books, Movies & Music', 'color' => 'yellow'],
            ['name' => 'Toys, Baby & Child', 'color' => 'pink']
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
