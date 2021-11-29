<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('id_ID');
        $pixel = $faker->randomElement([2,4,6,8,16,20.7,32,48,64,108]);
        $battery = $faker->randomElement([13000,6000,2400]);
        $ram = $faker->randomElement([2,4,8,16,32,64]);

        for ($i=1; $i <= 10; $i++) { 
            DB::table('products')->insert([
                'name' => Str::random(10),
                'ram' => $ram,
                'camera' => rand(10,20),
                'screen' => $pixel,
                'battery' => $battery,
                'stock' => rand(20,30),
                'price' => rand(15,20) * 1000000,
                'category_id' => rand(1,2),
                'brand_id' => rand(1,4)
            ]);
        }
    }
}
