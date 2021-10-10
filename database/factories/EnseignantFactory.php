<?php

namespace Database\Factories;

use App\Models\Enseignant;
use Database\Factories\EnseignantFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnseignantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Enseignant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nom' => $this->faker->lastName(),
            'Prénom'=>$this->faker->firstName(),
            'Email' => $this->faker->unique()->safeEmail(),
            'Téléphone' =>$this->faker->phoneNumber(),
            'statut_id' =>rand(1,2)
        ];
    }
}
