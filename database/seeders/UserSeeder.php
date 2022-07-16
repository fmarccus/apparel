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
            'contact' => '89271622',
            'address' => 'Manila City',
            'email_verified_at' => now(),
            'password' => bcrypt('ryeserver'),
            'userType' => '0'
        ]);
        User::create([
            'name' => 'test user',
            'email' => 'user1@gmail.com',
            'contact' => '17298872',
            'address' => 'Makati City',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'userType' => '1'
        ]);
        User::create([
            'name' => 'test user 2',
            'email' => 'user2@gmail.com',
            'contact' => '90271829',
            'address' => 'Taguig City',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'userType' => '1'
        ]);
        User::create([
            'name' => 'test user 3',
            'email' => 'user3@gmail.com',
            'contact' => '77782001',
            'address' => 'San Juan City',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'userType' => '1'
        ]);
        User::create([
            'name' => 'test user 4',
            'email' => 'user4@gmail.com',
            'contact' => '12890099',
            'address' => 'Marikina City',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'userType' => '1'
        ]);
        User::create([
            'name' => 'test user 5',
            'email' => 'user5@gmail.com',
            'contact' => '78999021',
            'address' => 'Pasig City',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'userType' => '1'
        ]);
    }
}
