<?php

namespace Database\Seeders;

use App\Enums\Role as RoleEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::firstOrCreate(['name' => RoleEnum::SuperAdmin]);
        Role::firstOrCreate(['name' => RoleEnum::Admin]);
        Role::firstOrCreate(['name' => RoleEnum::Manager]);
        Role::firstOrCreate(['name' => RoleEnum::User]);
    }
}