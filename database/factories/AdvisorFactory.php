<?php

namespace Database\Factories;

use App\Models\Advisor;
use App\Models\User;
use App\Models\City;
use App\Models\Channel;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdvisorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Advisor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'users_id' => $this->faker->unique()->numberBetween(2, User::count()),
            'cities_id' => $this->faker->numberBetween(1, City::count()),
            'channels_id' => $this->faker->numberBetween(1, Channel::count()),
        ];
    }
}
