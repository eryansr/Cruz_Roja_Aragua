<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Role::truncate();

        Role::create([
            'name' => "admin",
            'display_name' => "Admin",
            'description' => "Administrador del sitio",
        ]);

        Role::create([
            'name' => "moderador",
            'display_name' => "Moderador",
            'description' => "Moderador de voluntarios y censos",
        ]);

        User::create([
            'name' => "Admin",
            'email' => "Admin@email.com",
            'password' => "admin",
        ]);
    }
}
