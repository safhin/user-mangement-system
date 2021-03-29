<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role' => 'Super Admin',
        ]);
        DB::table('roles')->insert([
            'role' => 'Admin',
        ]);
        DB::table('roles')->insert([
            'role' => 'Editor',
        ]);
        DB::table('roles')->insert([
            'role' => 'Author',
        ]);
        DB::table('roles')->insert([
            'role' => 'User',
        ]);
    }
}
