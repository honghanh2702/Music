<?php

namespace Database\Seeders;

use App\Models\UserMusicList;
use Illuminate\Database\Seeder;

class UserMusicListTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserMusicList::factory(20)->create();
    }
}
