<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'firstName' => 'Mark',
            'middleName' => 'Mosobo',
            'lastName' => 'Cheshari',
            'mobile' => '0790659917',
            'email' => 'mmosobo'.'@gmail.com',
            'password' => Hash::make(123456),
            'intro' => 'I write to support the fight to reduce HIV/Aids transmission in Kenya',
            'profile' => 'Student at Masinde Muliro University of Science and Technology',
            'email_verified' => false,
            'password_changed' => false
        ]);

        User::create([
            'firstName' => 'Hannah',
            'middleName' => 'Montana',
            'lastName' => 'Chesebe',
            'mobile' => '0779086163',
            'email' => 'hannahmontana'.'@yahoo.com',
            'password' => Hash::make(123456),
            'intro' => 'My blogging is inclined towards women empowerment and feminism',
            'profile' => 'Practicing lawyer at Smithsonian Airways',
            'email_verified' => false,
            'password_changed' => false
        ]);
    }
}
