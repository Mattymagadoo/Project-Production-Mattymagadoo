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
        \App\Models\User::factory(10)->create();
        \App\Models\product::factory(10)->create();
        \App\Models\type::table('types')->insert([
            'id' => '1',
            'type_name' => 'game'
            ],
            [
                'id' => '2',
                'type_name' => 'book'
            ],
            [
                'id' => '3',
                'type_name' => 'film'
            ]);
    }
}
