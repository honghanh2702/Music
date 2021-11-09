<?php

namespace Database\Seeders;

use App\Models\UserMusicListItem;
use Illuminate\Database\Seeder;

class UserMusicListItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserMusicListItem::factory(20)->create();
    }
}
