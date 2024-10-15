<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['brand_name' => 'Adidas', 'slug' => 'adidas'],
            ['brand_name' => 'Puma', 'slug' => 'puma'],
            ['brand_name' => 'Reebok', 'slug' => 'reebok'],
            ['brand_name' => 'Nike', 'slug' => 'nike'],
            ['brand_name' => 'Vans', 'slug' => 'vans'],
            ['brand_name' => 'New Balance', 'slug' => 'new-balance'],
            ['brand_name' => 'Asics', 'slug' => 'asics'],
            ['brand_name' => 'Crocs', 'slug' => 'crocs'],
        ];

        foreach ($brands as $brand) {
            Brand::create([
                'brand_name' => $brand['brand_name'],
                'slug' => $brand['slug'],
            ]);
        }
    }
}
