<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    




    /*
    |--------------------------------------------------------------------------
    |                             RUN METHOD
    |--------------------------------------------------------------------------
    */
    public function run()
    {
        $this->call([
            AdminSeeder::class,
        ]);
    }
}
