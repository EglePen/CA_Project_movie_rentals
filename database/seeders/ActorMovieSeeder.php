<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ActorMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('actor_movie')->insert([
            [
                'actor_id' => 1,
                'movie_id' => 1,
            ],
            [
                'actor_id' => 2,
                'movie_id' => 2,
            ],
            [
                'actor_id' => 3,
                'movie_id' => 3,
            ],
            [
                'actor_id' => 4,
                'movie_id' => 4,
            ],
            [
                'actor_id' => 5,
                'movie_id' => 5,
            ]
        ]);
    }
}
