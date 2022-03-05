<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        foreach (['JavaScript', 'PHP', 'Go', 'C'] as $name) {
            \App\Models\Dictionary::create([
                'name' => $name,
                'slug' => Str::of($name)->slug('-'),
                'description' => '',
                'validated' => true,
                'user_id' => 1
            ]);
        }

        \App\Models\User::factory(10)->create();
    }
}
