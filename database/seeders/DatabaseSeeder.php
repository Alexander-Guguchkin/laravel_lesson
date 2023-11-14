<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\UserSeeder;
use Database\Seeders\CountriesSeeder;
use Database\Seeders\CitySeeder;
use Database\Seeders\inser_user_table;
use Database\Seeders\inser_profile_table;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // DB::table('User_posts')->insert([
        //     "title"=>Str::random(10),
        //     "slug"=>Str::random(10),
        //     "texts"=>Str::random(10),
        //     "mini_pic"=>Str::random(10),
        //     "email"=>Str::random(26)."@email.ru",
        //     "password"=>Hash::make('123456789'),
        // ]);
        // $this->call([
        //     CitySeeder::class,
        //     UserSeeder::class,
        //     CountriesSeeder::class,
        // ]);
        // DB::table('User_posts')->insert([
        //     "title"=>Str::random(10),
        //     "texts"=>Str::random(10),
        //     "description"=>Str::random(10)
        // ]);
        // $this->call([
        //     inser_user_table::class,
        //     inser_profile_table::class,
        // ]);
        DB::table('cities')->insert([
            'name'=>'Tambow',
            'country_id'=>1
        ]);
        DB::table('countries')->insert([
            'name'=>'Russia',
        ]);
    }
}
