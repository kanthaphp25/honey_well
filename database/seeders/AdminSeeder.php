<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//Admin::truncate();
        $admin = Admin::create([
            'name' => 'Admin',
            'type' => 'admin',
            'password' => Hash::make('Reddy@225'),
            'email' => 'admin@gmail.com',
            'mobile' => '0909778899',
            'picture' => '',
            'status' => 1,
        ]);    }
}
