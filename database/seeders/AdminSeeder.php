<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //adminuser
        User::create([
            'name' => 'Admin',
            'email' => 'admin@email.com',
            'email_verified_at' =>now(),
            'password' => bcrypt('password'),
            'is_admin' =>true,
        ]);
        User::create([
            'name' => 'Test',
            'email' => 'test@email.com',
            'email_verified_at' =>now(),
            'password' => bcrypt('password'),
            'is_admin' =>false,
        ]);
    }
}
