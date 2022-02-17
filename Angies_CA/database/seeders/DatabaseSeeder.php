<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RoleSeeder::class); // ROLE SEEDER - what role does this user have?
        $this->call(UserSeeder::class); // USER SEEDER - what user is it?
    }
}
