<?php

namespace Database\Seeders;

use App\Authorization\PermissionsEnum;
use App\Authorization\RolesEnum;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        foreach (PermissionsEnum::cases() as $permission)
        {
            Permission::create(['name' => $permission->value]);
        }

        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $role = Role::create(['name' => RolesEnum::DELIVERY]);

        $role = Role::create(['name' => RolesEnum::SENDER]);
        $role->givePermissionTo(PermissionsEnum::PACKET_CREATE);
        $role->givePermissionTo(PermissionsEnum::PACKET_TYPE_CREATE);

        $role = Role::create(['name' => RolesEnum::WAREHOUSE]);

    }
}
