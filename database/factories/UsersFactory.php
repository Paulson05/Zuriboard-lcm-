<?php

namespace Database\Factories;

use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Users::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           
            'last_name' => $this->faker->name,
            'first_name' => $this->faker->name,
            'middle_name' => $this->faker->name,
            'username' => $this->faker->name,
            'gender' => $this->faker->name,
            'age' => $this->faker->age,
            'track' => $this->faker->name,
            'experience' => $this->faker->name,
            'employment' => $this->faker->name,
            'education' => $this->faker->name,
            'email'   =>   $this->faker->unique()->safeEmail,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'confirmed_password' =>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'info' => $this->faker->name,
            'remember_token' => Str::random(10), 
        ];
    }
}
