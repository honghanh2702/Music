<?php

namespace Database\Factories;

use App\Models\SingerSong;
use Illuminate\Database\Eloquent\Factories\Factory;

class SingerSongFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SingerSong::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'singer_id' => $this->faker->numberBetween(1, 20),
            'song_id' => $this->faker->numberBetween(1, 20)
        ];
    }
}
