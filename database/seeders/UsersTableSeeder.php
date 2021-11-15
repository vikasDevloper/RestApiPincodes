<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		User::create([
            'name' => 'vikas',
            'username' => 'vikas',
			'password' => Hash::make('admin'),
            'email' => 'vikas@laravel.com'
        ]);
    }
}
