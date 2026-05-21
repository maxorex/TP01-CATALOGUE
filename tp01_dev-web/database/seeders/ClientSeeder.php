<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'name' => 'Son',
            'first_name' => 'Goku',
            'email' => 'Goku@example.com',
            'password' => Hash::make('password'),
            'address' => '123 Dragon Ball St',
            'city' => 'Namek',
            'postal_code' => 'F3R 1T1',
            'province' => 'QC',
            'phone' => '211-555-1234',
        ]);

        Client::create([
            'name' => 'Prime',
            'first_name' => 'Optimus',
            'email' => 'Prime@example.com',
            'password' => Hash::make('password'),
            'address' => '456 Namek Ave',
            'city' => 'Namek',
            'postal_code' => 'U2V 4B5',
            'province' => 'ON',
            'phone' => '282-555-5678',
        ]);

        Client::create([
            'name' => 'Jackson',
            'first_name' => 'Michael',
            'email' => 'Jackson@example.com',
            'password' => Hash::make('password'),
            'address' => '789 West City Rd',
            'city' => 'West City',
            'postal_code' => 'H1H 1H1',
            'province' => 'ON',
        ]);

        Client::create([
            'name' => 'Wayne',
            'first_name' => 'Bruce',
            'email' => 'NotBatMan@example.com',
            'password' => Hash::make('password'),
            'address' => '101 Gotham St',
            'city' => 'East Side',
            'postal_code' => 'J2J 2J2',
            'province' => 'QC',
        ]);

        Client::create([
            'name' => 'Stark',
            'first_name' => 'Tony',
            'email' => 'Stark@example.com',
            'password' => Hash::make('password'),
            'address' => '101 Stark Tower Rd',
            'city' => 'New York',
            'postal_code' => 'M4B 1B3',
            'province' => 'ON',
        ]);
    }
}
