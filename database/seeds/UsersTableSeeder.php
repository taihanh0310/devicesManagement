<?php

use Illuminate\Database\Seeder;
use App\User as User;
use Illuminate\Hashing\BcryptHasher;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'Nguyen Tai Hanh', 
            'email' => 'admin@admin.com', 
            'password' => bcrypt('123456'),
            'status' => 1,
            'role_id' => 1,
            'phone_number' => '01676460626' 
        ]);
    }
}
