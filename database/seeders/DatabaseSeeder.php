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
        //Generate 10 random users
        \App\Models\User::factory(18)->create();

        // This comment will not be present in the rendered HTML
            //Generate 30 extinguishers
            \App\Models\product::factory(10)->create(['name' => 'Small extinguisher','price' => 33.99, 'type' => 'extinguisher','batch' => '00001']);
            \App\Models\product::factory(10)->create(['name' => 'Medium extinguisher','price' => 42.99, 'type' => 'extinguisher','batch' => '00002']);
            \App\Models\product::factory(10)->create(['name' => 'Large extinguisher','price' => 49.99, 'type' => 'extinguisher','batch' => '00003']);

            //Generate 30 signs
            \App\Models\product::factory(10)->create(['name' => 'Fire exit sign','price' => 9.50, 'type' => 'sign','batch' => '00004']);
            \App\Models\product::factory(10)->create(['name' => 'No smoking sign','price' => 7, 'type' => 'sign','batch' => '00005']);
            \App\Models\product::factory(10)->create(['name' => 'Fire alarm sign','price' => 8, 'type' => 'sign','batch' => '00006']);

            //Generate 30 blankets
            \App\Models\product::factory(10)->create(['name' => 'small blanket','price' => 12.99, 'type' => 'blanket','batch' => '00007']);
            \App\Models\product::factory(10)->create(['name' => 'medium blanket','price' => 17.50, 'type' => 'blanket','batch' => '00008']);
            \App\Models\product::factory(10)->create(['name' => 'large blanket','price' => 19.99, 'type' => 'blanket','batch' => '00009']);




        //Generate posts
        \App\Models\post::factory(6)->create();

        \App\Models\type::factory()->create(['id' => '1','type_name' => 'extinguisher']);
        \App\Models\type::factory()->create(['id' => '2','type_name' => 'sign']);
        \App\Models\type::factory()->create(['id' => '3','type_name' => 'blanket']);

        \App\Models\department::factory()->create(['id' => '1','dept_name' => 'customer service']);
        \App\Models\department::factory()->create(['id' => '2','dept_name' => 'IT']);
        \App\Models\department::factory()->create(['id' => '3','dept_name' => 'sales']);

        $this->call(RolesSeeder::class);
        $this->call(AdminSeeder::Class);



    }
}
