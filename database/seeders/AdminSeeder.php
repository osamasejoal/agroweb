<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    




    /*
    |--------------------------------------------------------------------------
    |                             RUN METHOD
    |--------------------------------------------------------------------------
    */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Osama Sejoal',
            'email' => 'osamasejoal@mail.com',
            'role' => '1',
            'password' => Hash::make('osamasejoal@mail.com'),
        ]);
    }
}
