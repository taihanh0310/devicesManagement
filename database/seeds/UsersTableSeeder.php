<?php

use Illuminate\Database\Seeder;
use App\User;
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
        User::create([
            'name', 
            'email', 
            'password',
            'status',
            'role_id',
            'phone_number'
        ]);
    }
}
