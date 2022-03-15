<?php
/// php artisan make:seeder RoleSeeder
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role; // specify that im using the models role

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create two roles, admin and user, thios is for authentication
        $role_admin = new Role(); // var role admin, neeed to set name of role and desc
        $role_admin->name = 'admin';
        $role_admin->description = 'administartor, can make changes';
        $role_admin->save(); /// this saves it in the databse

        $role_user = new Role(); // var role admin, neeed to set name of role and desc
        $role_user->name = 'user';
        $role_user->description = 'ordinary user can just view';
        $role_user->save(); /// this saves it in the databse
    }
}
