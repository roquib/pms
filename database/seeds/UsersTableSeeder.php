<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 1,
            'active' => 1,
            'name' => 'Md. Momen Sheikh',
            'username' => 'momen',
            'email' => 'momen@gmail.com',
            'password' => bcrypt('123456789'),
            'remember_token' => Str::random(10),
        ]);
    }
}
