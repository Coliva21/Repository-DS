<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'User_Administrador']);
        $role2 = Role::create(['name' => 'User_Proveeduria']);

        Permission::create(['name' => 'home'])->syncRoles([$role1]);

        Permission::create(['name' => 'inventario.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'inventario.create'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'inventario.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'inventario.destroy'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'usuarios.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'usuarios.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'usuarios.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'usuarios.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'roles.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'roles.destroy'])->syncRoles([$role1]);

        Permission::create(['name' => 'rolusuario.index'])->syncRoles([$role1]);
        Permission::create(['name' => 'rolusuario.create'])->syncRoles([$role1]);
        Permission::create(['name' => 'rolusuario.edit'])->syncRoles([$role1]);
        Permission::create(['name' => 'rolusuario.destroy'])->syncRoles([$role1]);

    }
}
