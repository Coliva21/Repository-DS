<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Cristian Oliva',
            'email' => 'colo@cooslsl.com',
            'password' => bcrypt('12345678')])->assignRole('User_Administrador');

        User::create([
            'name' => 'Danni Oliva',
            'email' => 'danni12@gmail.com',
            'password' => bcrypt('12345678')])->assignRole('User_Proveeduria');
    }
}
