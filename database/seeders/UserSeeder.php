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
        User::create([
            'name' => 'Lauretta McClure',
            'email' => 'shanie.gorczany@example.com',
            'password' => '566666666',
            'lat'  =>'24.69023',
            'long'=>'46.685',
            'is_authorized'=>1
        ]);
    }
}
