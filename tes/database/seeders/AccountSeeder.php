<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('accounts')->insert([
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'name' => 'Admin',
            'role' => 'admin',
        ]);

        DB::table('accounts')->insert([
            'username' => 'author',
            'password' => Hash::make('author'),
            'name' => 'Author',
            'role' => 'author',
        ]);
    }
}
