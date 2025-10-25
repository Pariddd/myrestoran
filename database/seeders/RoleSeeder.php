<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('roles')->truncate();

        $roles = [
            ['role_name' => 'admin', 'description' => 'Administrator'],
            ['role_name' => 'cashier', 'description' => 'Kasir'],
            ['role_name' => 'chef', 'description' => 'Chef'],
            ['role_name' => 'customer', 'description' => 'Pelanggan'],
        ];

        DB::table('roles')->insert($roles);
        Schema::enableForeignKeyConstraints();
    }
}
