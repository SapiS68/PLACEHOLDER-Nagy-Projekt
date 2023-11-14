<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'role_id' => '0',
            'role_name' => 'User',
        ]);

        DB::table('roles')->insert([
            'role_id' => '1',
            'role_name' => 'Admin',
        ]);

        DB::table('roles')->insert([
            'role_id' => '2',
            'role_name' => 'Owner',
        ]);
    }
}
