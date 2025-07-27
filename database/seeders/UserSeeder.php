<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::firstOrCreate(
            ['email' => 'admin@binocle.shop'],
            ['name' => 'Admin', 'password' => Hash::make('password')]
        );

        $admin->assignRole(Role::SuperAdmin);
    }
}