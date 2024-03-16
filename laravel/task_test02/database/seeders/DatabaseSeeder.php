<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Area;
use App\Models\Route;
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
        $this->call([
            TestSeeder::class,
            UserSeeder::class,
            AreaSeeder::class, // 親の方を先に書く
            ShopSeeder::class,
            RouteSeeder::class,
            RouteShopSeeder::class
        ]);
        
        \App\Models\ContactForm::factory(100)->create();
    }
}
