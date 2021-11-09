<?php

namespace Database\Factories;

use App\Models\UserMusicList;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserMusicListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserMusicList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'user_id' => $this->faker->numberBetween(1, 20)
        ];
    }
}
