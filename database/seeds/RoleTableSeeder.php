<?php

use Illuminate\Database\Seeder;
use App\Models\Role as Role;

class RoleTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Role::insert([
            [
                'name' => 'admin',
                'description' => 'Quan tri vien he thong',
                'created_by' => '1'
            ],
            [
                'name' => 'ceo',
                'description' => 'Tong giam doc',
                'created_by' => '1'
            ],
        ]);
    }

}
