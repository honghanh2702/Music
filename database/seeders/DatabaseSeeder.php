<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(SingerTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(SongTableSeeder::class);
        $this->call(UserMusicListTableSeeder::class);
        $this->call(SingerSongTableSeeder::class);
        $this->call(UserMusicListItemTableSeeder::class);
        $this->call(CommentTableSeeder::class);
    }
}
