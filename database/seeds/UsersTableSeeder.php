<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Rafael Barbosa',
            'email' => 'rafael@clinica.com.br',
            'password' => bcrypt('123456'),
        ]);
    }
}
