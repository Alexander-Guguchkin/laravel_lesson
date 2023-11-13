<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class inser_profile_table extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
            'name' => 'Alexander',
            'surname' => 'Guguchkin',
            'email' => 'guguckins1122@mail.ru',
            'user_id' => 1
        ]);
    }
}
