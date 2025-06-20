<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->delete();

        \App\Models\Category::create([
            'name' => 'Fashion',
            'slug' => 'fashion',
        ]);

        \App\Models\Category::create([
            'name' => 'Teknologi',
            'slug' => 'teknologi',
        ]);
    }
}
