<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ActorSeeder;
use Database\Seeders\GenreSeeder;
use Database\Seeders\MovieSeeder;
use Database\Seeders\CountrySeeder;
use Database\Seeders\LanguageSeeder;
use Database\Seeders\ActorMovieSeeder;
use Database\Seeders\GenreMovieSeeder;
use Database\Seeders\CountryMovieSeeder;
use Database\Seeders\LanguageMovieSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            MovieSeeder::class,
            ActorSeeder::class,
            GenreSeeder::class,
            CountrySeeder::class,
            LanguageSeeder::class,
            GenreMovieSeeder::class,
            CountryMovieSeeder::class,
            LanguageMovieSeeder::class,
            ActorMovieSeeder::class,
            UserSeeder::class,
        ]);
    }
}
