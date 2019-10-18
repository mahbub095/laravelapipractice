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
        // $this->call(UsersTableSeeder::class);
        factory(50, App\Model\Product::class)->create();
        factory(300, App\Model\Review::class)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
