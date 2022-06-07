<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DriversSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $drivers = [
            [
            'name' => 'Kristian Beatty',
            'email' => 'brandyn50@example.org',
            'password' => '577777777',
            'lat'  =>'24.69023',
            'lng'=>'46.685'
            ],
            [
                'name' => 'Ms. Raquel Borer Sr.',
                'email' => 'hhudson@example.org',
                'password' => '588888888',
                'lat'  =>'24.69022',
                'lng'=>'46.684'
            ]
            ,
            [
                'name' => 'Jordane Schroeder',
                'email' => 'alden.rutherford@example.com',
                'password' => '584444444',
                'lat'  =>'24.69018',
                'lng'=>'46.680'
            ]
            ,
            [
                'name' => 'Dr. Lemuel Jacobson',
                'email' => 'norval23@example.net',
                'password' => '599999999',
                'lat'  =>'24.69021',
                'lng'=>'46.683'
            ]
            ,
            [
                'name' => 'Kiel Volkman',
                'email' => 'ynolan@example.net',
                'password' => '5111111110',
                'lat'  =>'24.69020',
                'lng'=>'46.682'
            ],
            [
                'name' => 'Cortney Wolf',
                'email' => 'jast.lillian@example.org',
                'password' => '563333333',
                'lat'  =>'24.69019',
                'lng'=>'46.681'
            ]
            ];

            foreach ($drivers as $driver) {
                Driver::create($driver);
            }
    }
}
