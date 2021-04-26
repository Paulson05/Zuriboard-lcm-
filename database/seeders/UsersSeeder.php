<?php

namespace Database\Seeders;
use Database\Factories\UsersFactory;
use App\Models\Users;
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
        // UsersFactory::times(10)->create();
         \App\Models\Users::factory(3)->create();
        
    }
}
