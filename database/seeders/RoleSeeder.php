<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users_types')->insert([
        //     'user_type' => 'administrator'
        // ]);

        // DB::table('users_types')->insert([
        //     'user_type' => 'student'
        // ]);

        // DB::table('users_types')->insert([
        //     'user_type' => 'clerk'
        // ]);

        Role::create(['name' => 'administrator']);
        Role::create(['name' => 'student']);
        Role::create(['name' => 'clerk']);
    }
}
