<?php

namespace Database\Seeders;
use Database\Factories\UsersFactory;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // UsersFactory::times(20)->create();
         \App\Models\User::factory(10)->create();
        
    }
}
