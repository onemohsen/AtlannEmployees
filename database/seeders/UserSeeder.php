<?php

namespace Database\Seeders;

use App\Models\User;
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
        $admin = User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('admin'),
            'is_admin'=>true
        ]);

        $employ1 = User::create([
            'name'=>'user1',
            'email'=>'user1@user.com',
            'password'=>bcrypt('user1')
        ]);

        $employ2 = User::create([
            'name'=>'user2',
            'email'=>'user2@user.com',
            'password'=>bcrypt('user2')
        ]);
    }
}
