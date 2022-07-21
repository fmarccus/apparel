<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->faker = Faker::create();
        User::create([
            'name' => 'Rye Advincula',
            'email' => 'server@server.com',
            'contact' => '89271622',
            'address' => 'Manila City',
            'email_verified_at' => now(),
            'password' => bcrypt('ryeserver'),
            'userType' => '0',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month')
        ]);
        User::create([
            'name' => 'test user',
            'email' => 'user1@gmail.com',
            'contact' => '17298872',
            'address' => 'Makati City',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'userType' => '1',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month')
        ]);
        User::create([
            'name' => 'test user 2',
            'email' => 'user2@gmail.com',
            'contact' => '90271829',
            'address' => 'Taguig City',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'userType' => '1',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month')
        ]);
        User::create([
            'name' => 'test user 3',
            'email' => 'user3@gmail.com',
            'contact' => '77782001',
            'address' => 'San Juan City',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'userType' => '1',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month')
        ]);
        User::create([
            'name' => 'test user 4',
            'email' => 'user4@gmail.com',
            'contact' => '12890099',
            'address' => 'Marikina City',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'userType' => '1',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month')
        ]);
        User::create([
            'name' => 'test user 5',
            'email' => 'user5@gmail.com',
            'contact' => '78999021',
            'address' => 'Pasig City',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'userType' => '1',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month')
        ]);
        User::create([
            'name' => 'test user 6',
            'email' => 'user6@gmail.com',
            'contact' => '88767889',
            'address' => 'Pasig City',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'userType' => '1',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month')
        ]);
        User::create([
            'name' => 'test user 7',
            'email' => 'user7@gmail.com',
            'contact' => '00987678',
            'address' => 'Pasig City',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'userType' => '1',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month')
        ]);
        User::create([
            'name' => 'test user 8',
            'email' => 'user8@gmail.com',
            'contact' => '98976567',
            'address' => 'Pasig City',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'userType' => '1',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month')
        ]);
        User::create([
            'name' => 'test user 9',
            'email' => 'user9@gmail.com',
            'contact' => '23465214',
            'address' => 'Pasig City',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'userType' => '1',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month')
        ]);
        User::create([
            'name' => 'test user 10',
            'email' => 'user10@gmail.com',
            'contact' => '55678564',
            'address' => 'Pasig City',
            'email_verified_at' => now(),
            'password' => bcrypt('12345678'),
            'userType' => '1',
            'created_at'=>$this->faker->dateTimeBetween($startDate = '-6 month',$endDate = 'now +6 month')
        ]);
    }
}
