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
        \App\Models\User::factory(1)->create(['email'=>'a@a.com']);
        \App\Models\Run::factory(5)->create();
        \App\Models\Result::factory(5)->create();
    }
}
