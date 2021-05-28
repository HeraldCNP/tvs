<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'Herald Choque Vargas',
            'email' => 'heraldcnp@gmail.com',
            'password' => bcrypt('123'),
        ])->assignRole('Admin');
        
        User::create([
            'name' => 'Luis Daniel Salamanca Barral',
            'email' => 'luissdanielabc@gmail.com',
            'password' => bcrypt('2444666666'),
        ])->assignRole('Blogger');

        User::factory(4)->create();
    }
}
