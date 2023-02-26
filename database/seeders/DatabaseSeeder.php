<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        // \App\Models\post::factory(10)->create();

        \App\Models\type::factory()->create(['id' => '1','type_name' => 'game']);
        \App\Models\type::factory()->create(['id' => '2','type_name' => 'book']);
        \App\Models\type::factory()->create(['id' => '3','type_name' => 'film']);

        \App\Models\department::factory()->create(['id' => '1','dept_name' => 'customer service']);
        \App\Models\department::factory()->create(['id' => '2','dept_name' => 'IT']);
        \App\Models\department::factory()->create(['id' => '3','dept_name' => 'sales']);



    }
}
