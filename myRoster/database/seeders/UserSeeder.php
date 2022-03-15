<?php
// php artisan make:seeder UserSeeder
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //creating the user seeder, two seeders,
        // we are creating the actual users rather than in
        // role seeder we create the roles they were assigned to

        $role_admin = Role::where('name', 'admin')->first(); // without the first, it will retrieve more than one admin
        $role_user = Role::where('name', 'user')->first();

        $admin = new User();
        $admin->name = 'Angel Thompson';
        $admin->email = 'angeljunothompson@larafest.ie';
        $admin->password = Hash::make('password');
       // instead of using hash  to make a random pasword,
        // im  gonna asign my own  password, and no that isnt my real life password haha o_0
        $admin->save(); 
        // \App\Models\User::factory(10)->create();
        // when im wrting this next line it will attach a role to the user, 
        //like an admin or just a user
        $admin->roles()->attach($role_admin); // END OF ADMIN ROLES


        // MAKING ALL MY DOGS TO HAVE THE USER ROLE AND NOT THE ADMIN
        $admin = new User();
        $admin->name = 'Juno Thompson';
        $admin->email = 'junoangelthompson@larafest.ie';
        $admin->password = Hash::make('password');// hash uses a random password
        $admin->save(); 
        //just a user role, no admin authority
        $admin->roles()->attach($role_user);

        $admin = new User();
        $admin->name = 'Joey Thompson';
        $admin->email = 'joeythompson@larafest.ie';
        $admin->password = Hash::make('password'); // hash uses a random password
        $admin->save(); 
        //just a user role, no admin authority
        $admin->roles()->attach($role_user);

        $admin = new User();
        $admin->name = 'Odi Thompson';
        $admin->email = 'odi_thompson@larafest.ie';
        $admin->password = 'vizla';// instead of using hash  to make a random pasword, im  gonna asign my own
        $admin->save(); 
        //just a user role, no admin authority
        $admin->roles()->attach($role_user);

    }
}
