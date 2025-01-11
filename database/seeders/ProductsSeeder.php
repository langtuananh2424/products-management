<?php

namespace Database\Seeders;

use App\Models\Products;
use App\Models\Stores;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $stores = Stores::all();
        foreach ($stores as $store)
        {
            for ($i = 1; $i <= 4; $i++)
            {
                Products::create([
                   'store_id' => $store->id,
                    'name' => $faker->word,
                    'description' => $faker->paragraph,
                    'price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100),
                ]);
            }
        }
    }
}
