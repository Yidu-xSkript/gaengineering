<?php

namespace Database\Factories;

use App\Models\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;

class SettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Setting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'about' => $this->faker->name(),
            'happy_client' => $this->faker->randomNumber(),
            'project' => $this->faker->randomNumber(),
            'years_of_experience' => $this->faker->randomNumber(),
            'awards' => $this->faker->randomNumber(),
            'phone_number' => $this->faker->phoneNumber,
            'location' => $this->faker->locale,
            'map_location' => $this->faker->locale,
            'email' => $this->faker->safeEmail,
            'phone_number_2' => $this->faker->phoneNumber,
        ];
    }
}
