<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserMetaData;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'email' => '900.crypto@gmail.com',
        	'password' => bcrypt('123456'),
        	'email_verified_at' => now(),
        	'name' => 'Admin',
        	'is_admin' => 1
        ]);
        UserMetaData::create([
            'user_id' => $user->id,
            'first_name' => 'Admin',
            'last_name' => 'David',
            'city' => 'Kampala',
            'country' => 'Uganda',
            'category' => 'Degrees',
            'interest' => 'Education',
            'subject' => 'Computer Science'
        ]);
    }
}
