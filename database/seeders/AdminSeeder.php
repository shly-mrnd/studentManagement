<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $dateOfBirth = "2002-08-24";
        User::create([
            'student_id' => 'none',
            'name' => 'Jezel Patrice Manlangit',
            'program' => 'CICT',
            'email' => 'jezelpatricemanlangit@gmail',
            'email_verified_at' => now(),
            'phone_number' => '09123903522',
            'address' => 'CatSU',
            'dob' => $dateOfBirth,
            'contact' => 'Billy Manoguid',
            'contact_number' => '09123456789',
            'status' => 'none',
            'username' => 'adminjezel',
            'password' => 'password', //password
        ])->assignRole('administrator');
    }
}
