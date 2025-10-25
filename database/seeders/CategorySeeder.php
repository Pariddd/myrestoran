<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('categories')->truncate();

        $categories = [
            ['cat_name' => 'Makanan', 'description' => 'Kategori untuk makanan'],
            ['cat_name' => 'Minuman', 'description' => 'Kategori untuk minuman'],
        ];

        DB::table('categories')->insert($categories);
        Schema::enableForeignKeyConstraints();
    }
}
