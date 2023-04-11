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
        $user = [
            [
                'username' => 'su_admin',
                'name'     => 'ini akun super Admin',
                'email'    => 'su_admin@example.com',
                'role'    => 'super_admin',
                'password' => bcrypt('123456'),
            ],
            [
                'username' => 'admin',
                'name'     => 'ini akun Admin',
                'email'    => 'admin@example.com',
                'role'     => 'admin',
                'password' => bcrypt('123456'),
            ],
            [
                'username' => 'user',
                'name'     => 'ini akun User',
                'email'    => 'user@example.com',
                'role'     => 'user',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $value) {
            User::create($value);
        }
    }
}
