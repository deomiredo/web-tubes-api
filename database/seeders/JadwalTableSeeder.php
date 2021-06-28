<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jadwal;

class JadwalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jadwal::create(array(
            'title' => 'John Wick',
            'description' => 'this movie is sick'
        ));

        Jadwal::create(array(
            'title' => 'John Wick 2',
            'description' => 'this movie is the next john wick'
        ));
    }
}
