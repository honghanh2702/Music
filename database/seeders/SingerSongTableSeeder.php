<?php

namespace Database\Seeders;

use App\Models\SingerSong;
use Illuminate\Database\Seeder;

class SingerSongTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SingerSong::factory(20)->create();
    }
}
