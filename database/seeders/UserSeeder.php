<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'John Smith',
            'email' => 'john.smith@example.com',
            'password' => 'password',
        ]);
    }
}
