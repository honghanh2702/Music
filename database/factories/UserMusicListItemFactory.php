<?php

namespace Database\Factories;

use App\Models\UserMusicListItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserMusicListItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserMusicListItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_music_list_id' => $this->faker->numberBetween(1, 20),
            'song_id' => $this->faker->numberBetween(1, 20)
        ];
    }
}
