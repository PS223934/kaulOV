<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Person;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //"cleaner" seeder code (see config file for role formatting)
        $roles = config('roles.roles');

        foreach($roles as $role) {
            $role_object = Role::findOrCreate($role['name']);
            $permissions = $role['permissions'];
            foreach($permissions as $permission) {
                $permission = Permission::findOrCreate($permission);
                if($role_object->hasPermissionTo($permission)) {break;}
                $role_object->givePermissionTo($permission);
            }

            foreach($role['parent_of'] as $child) {
                $child_role = Role::findOrCreate($child);
                foreach($permissions as $permission) {
                    $permission = Permission::findOrCreate($permission);
                    if($child_role->hasPermissionTo($permission)) {break;}
                    $child_role->givePermissionTo($permission);
                }
            }
        }

        $this->call([
            PersonSeeder::class,
            UserCreditSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
        ]);
    }
}
