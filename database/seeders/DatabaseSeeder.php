<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
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
        DB::table('users') ->insert([
            'name' => 'Hoang Anh',
            'email' => 'anhhoang612001@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
