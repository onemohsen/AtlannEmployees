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
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
                'is_admin' => true
            ],
            [
                'name' => 'user1',
                'email' => 'user1@user.com',
                'password' => bcrypt('user1')
            ],
            [
                'name' => 'user2',
                'email' => 'user2@user.com',
                'password' => bcrypt('user2')
            ],
            [
                'name' => 'user3',
                'email' => 'user3@user.com',
                'password' => bcrypt('user3')
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
