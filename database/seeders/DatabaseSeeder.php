<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory()->hasNews(1)->create([
            'name' => 'UnknownRori',
            'password' => 'UnknownRori',
            'email' => 'UnknownRori',
        ]);

        \App\Models\User::factory(2)->create();

        \App\Models\User::factory(4)->hasNews(4)->create();
    }
}
