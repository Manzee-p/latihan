<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@gmai.com',
            'password' => bcrypt('rahasia'),
            'isAdmin' => 1,
        ]);

        \App\Models\User::create([
            'name' => 'member',
            'email' => 'member@gmai.com',
            'password' => bcrypt('rahasia'),
            'isAdmin' => 0,
        ]);
    }
}
