<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'read users']);
        Permission::create(['name' => 'update users']);
        Permission::create(['name' => 'delete users']);

        Permission::create(['name' => 'create permissions']);
        Permission::create(['name' => 'read permissions']);
        Permission::create(['name' => 'update permissions']);
        Permission::create(['name' => 'delete permissions']);

        Permission::create(['name' => 'register consignments']);
        Permission::create(['name' => 'consult consignments']);

        // create roles and assign existing permissions
        Role::create(['name' => 'admin'])->givePermissionTo([
            'create users',
            'read users',
            'update users',
            'delete users',
            'create permissions',
            'read permissions',
            'update permissions',
            'delete permissions',
        ]);

        Role::create(['name' => 'advisor'])->givePermissionTo('register consignments');
        Role::create(['name' => 'consulters'])->givePermissionTo('consult consignments');
    }
}
