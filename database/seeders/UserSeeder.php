<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Rye Advincula',
            'email' => 'server@server.com',
            'email_verified_at' => now(),
            'password' => bcrypt('ryeserver'),
            'userType' => '0'
        ]);
        User::create([
            'name' => 'test user',
            'email' => 'user1@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'userType' => '1'
        ]);
        User::create([
            'name' => 'test user 2',
            'email' => 'user2@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'userType' => '1'
        ]);
        User::create([
            'name' => 'test user 3',
            'email' => 'user3@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'userType' => '1'
        ]);
        User::create([
            'name' => 'test user 4',
            'email' => 'user4@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'userType' => '1'
        ]);
        User::create([
            'name' => 'test user 5',
            'email' => 'user5@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'userType' => '1'
        ]);
    }
}
