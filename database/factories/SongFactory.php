<?php

namespace Database\Factories;

use App\Models\Song;
use Illuminate\Database\Eloquent\Factories\Factory;

class SongFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Song::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'song_path' => 'storage/song/song/late-night.mp3',
            'category_id' => $this->faker->numberBetween(1, 20),
            'user_id' => $this->faker->numberBetween(1, 20),
            'image_path' => '/storage/song/image/matcha.jpg'
        ];
    }
}
