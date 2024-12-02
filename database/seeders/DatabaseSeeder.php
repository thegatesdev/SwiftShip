<?php

namespace Database\Seeders;

use App\Authorization\RolesEnum;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(PermissionSeeder::class);

        User::factory()->create([
            'email' => 'admin@example.com',
        ])->assignRole(RolesEnum::ADMIN);

        User::factory()->create([
            'email' => 'delivery@example.com',
        ])->assignRole(RolesEnum::DELIVERY);

        User::factory()->create([
            'email' => 'sender@example.com',
        ])->assignRole(RolesEnum::SENDER);

        User::factory()->create([
            'email' => 'warehouse@example.com',
        ])->assignRole(RolesEnum::WAREHOUSE);
    }
}
