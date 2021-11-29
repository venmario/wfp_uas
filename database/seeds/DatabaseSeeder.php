<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(BrandSeeder::class);
        $this->call([
            BrandSeeder::class,
            CategorySeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            ProductSeeder::class,
            ImageSeeder::class
        ]);
    }
}
