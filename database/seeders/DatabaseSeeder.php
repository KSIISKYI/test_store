<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{User, Category, Product};

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
        $products = Product::factory(20)->create();
        $categories = Category::factory(5)->create();

        foreach($products as $product)
        {
            $countCats = random_int(1, 5);
            $CatsIds = $categories->random($countCats)->pluck('id');
            $product->categories()->attach($CatsIds);
        }
    }
    
}
