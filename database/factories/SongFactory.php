<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Song>
 */
class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'song_title'=> fake()->sentence(),
            'artist_name'=> fake()->name(),
            'song_link'=> fake()->url(),
            'song_desc'=>fake()->paragraph(),
            'song_lyrics'=>fake()->paragraph(),
            'platform'=>rand() > 0.5 ? "youtube" : "spotify",
        ];
    }
}
