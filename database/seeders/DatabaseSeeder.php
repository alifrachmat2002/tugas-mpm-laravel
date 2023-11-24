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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            MoviesTableSeeder::class,
            ActorsTableSeeder::class,
        ]);

        \App\Models\Actor::factory(10)->create();
        \App\Models\Movie::factory(10)->create();

        // Attach actors to movies (many-to-many relationship)
        \App\Models\Movie::all()->each(function ($movie) {
            $actors = \App\Models\Actor::inRandomOrder()->limit(rand(1, 5))->get();
            $movie->actors()->attach($actors);
        });
    }
}
