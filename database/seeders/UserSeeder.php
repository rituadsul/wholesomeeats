<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name'     => 'Admin — Wholesome Eats',
                'email'    => 'admin@wholesomeeats.in',
                'phone'    => '9900000001',
                'role'     => 'admin',
                'address'  => 'Wholesome Eats, Shop 7, Parel Village, Parel',
                'city'     => 'Mumbai',
            ],
            [
                'name'     => 'Staff — Kitchen',
                'email'    => 'kitchen@wholesomeeats.in',
                'phone'    => '9900000002',
                'role'     => 'staff',
                'address'  => 'Parel, Mumbai',
                'city'     => 'Mumbai',
            ],
            [
                'name'     => 'Priya Sharma',
                'email'    => 'priya.sharma@gmail.com',
                'phone'    => '9823456789',
                'role'     => 'customer',
                'address'  => '401, Laxmi CHS, Lower Parel',
                'city'     => 'Mumbai',
            ],
            [
                'name'     => 'Rohan Mehta',
                'email'    => 'rohan.mehta@gmail.com',
                'phone'    => '9812345678',
                'role'     => 'customer',
                'address'  => '12, Dadar West',
                'city'     => 'Mumbai',
            ],
            [
                'name'     => 'Ananya Iyer',
                'email'    => 'ananya.iyer@yahoo.com',
                'phone'    => '9967812345',
                'role'     => 'customer',
                'address'  => '203, Worli Sea Face',
                'city'     => 'Mumbai',
            ],
            [
                'name'     => 'Kabir Khan',
                'email'    => 'kabir.k@outlook.com',
                'phone'    => '9845671234',
                'role'     => 'customer',
                'address'  => 'B-17, Antop Hill',
                'city'     => 'Mumbai',
            ],
            [
                'name'     => 'Sneha Patil',
                'email'    => 'sneha.patil@gmail.com',
                'phone'    => '9876543210',
                'role'     => 'customer',
                'address'  => '55, Matunga East',
                'city'     => 'Mumbai',
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->insert([
                'name'       => $user['name'],
                'email'      => $user['email'],
                'password'   => Hash::make('password'),
                'phone'      => $user['phone'],
                'address'    => $user['address'],
                'city'       => $user['city'],
                'role'       => $user['role'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
