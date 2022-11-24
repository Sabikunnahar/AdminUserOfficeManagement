<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '12345678',
            // 'password' => bcrypt('password'),
            // 'phone' => '01716448668',
            // 'image' => 'public/admin/user.png',
            // 'role_id' => '2',
            // 'address' => 'Sonargoan, Narayanganj',
        ];
        Admin::create($admin);
    }
}
