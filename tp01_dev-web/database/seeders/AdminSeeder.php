<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'email' => 'admin@cstj.qc.ca',
            'password' => Hash::make('webH2026'),
            'role' => "ROLE_ADMIN",
            'name' => 'Admin',
            'first_name' => 'Admin',

            'address' => 'Admin',
            'city' => 'Admin',
            'postal_code' => 'F3R 1T1',
            'province' => 'QC',
            'phone' => '211-555-1234',
        ]);
    }
}
