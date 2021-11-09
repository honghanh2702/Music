<?php

namespace Database\Seeders;

use App\Models\Singer;
use Illuminate\Database\Seeder;

class SingerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Singer::factory(20)->create();
    }
}
