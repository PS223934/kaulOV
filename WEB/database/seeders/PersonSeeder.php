<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create a user with role admin
        // admin
        $role = Role::findByName('admin');
        $first = "admin";
        $last = "";
        $email = "admin@localhost";
        $user = User::factory(['name' => $first, 'email' => $email])->create();
        $user->assignRole($role);
        Person::factory(['first_name' => $first, 'last_name' => $last, 'id' => $user->id])->create();

        $roles = ['chauffeur', 'management', 'servicedesk', 'rosterer'];

        for($i = 0; $i < 500; $i++) {
            $person = Person::factory()->create();
            // the role "klant" is the default role with 85% chance
            $role = fake()->optional($weight = 0.15, $default = 'klant')->randomElement($roles);
            $person->user()->first()->assignRole($role);
        }
    }
}
