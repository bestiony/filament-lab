<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(1)->create([
            'email' => 'admin@gmail.com',
            'password'=> Hash::make('123456')
        ]);
        $brands = Brand::factory()->count(10)->create();
        $categories = Category::factory()->count(10)
            ->has(Category::factory()->count(2), 'children')
            ->create();
        foreach ($brands as $brand) {
            $products = Product::factory()->count(10)->for($brand, 'brand')->create();
            foreach($products as $product){
                $product->categories()->sync($categories->random(3));
            }
        }
    }
}
