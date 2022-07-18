<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\UsuarioDomicilio;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UsuarioDomicilioFactory extends Factory
{

     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsuarioDomicilio::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $user = User::factory()->create();
        return [
            'user_id' =>  $user->id,
            'domicilio' => fake()->address(),
            'numero_exterior' => fake()->randomDigit(),
            'colonia' => fake()->state(),
            'cp' => fake()->randomDigit(),
            'ciudad' => fake()->city(),
        ];
    }
}
