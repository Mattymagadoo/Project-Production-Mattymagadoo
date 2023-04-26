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

        \App\Models\productType::factory()->create(['productType' => 'extinguisher']);
        \App\Models\productType::factory()->create(['productType' => 'Sign']);
        \App\Models\productType::factory()->create(['productType' => 'Blanket']);

        \App\Models\productTemplate::factory()->create(['name' => 'Small extinguisher','type_id' => 1,'price' => 33.99,'stock' => 10]);
        \App\Models\productTemplate::factory()->create(['name' => 'Medium extinguisher','type_id' => 1,'price' => 42.99,'stock' => 10]);
        \App\Models\productTemplate::factory()->create(['name' => 'Large extinguisher','type_id' => 1,'price' => 49.99,'stock' => 10]);

        \App\Models\productTemplate::factory()->create(['name' => 'Fire exit sign','type_id' => 2,'price' => 9.50,'stock' => 10]);
        \App\Models\productTemplate::factory()->create(['name' => 'No smoking sign','type_id' => 2,'price' => 7,'stock' => 10]);
        \App\Models\productTemplate::factory()->create(['name' => 'Fire alarm sign','type_id' => 2,'price' => 8,'stock' => 10]);

        \App\Models\productTemplate::factory()->create(['name' => 'Small blanket','type_id' => 3,'price' => 12.99,'stock' => 10]);
        \App\Models\productTemplate::factory()->create(['name' => 'Medium blanket','type_id' => 3,'price' => 17.50,'stock' => 10]);
        \App\Models\productTemplate::factory()->create(['name' => 'Large blanket','type_id' => 3,'price' => 19.99,'stock' => 10]);

            /*
            //Generate 30 extinguishers
            \App\Models\product::factory(10)->create(['name' => 'Small extinguisher','price' => 33.99, 'productType' => 'extinguisher','batch' => '00001']);
            \App\Models\product::factory(10)->create(['name' => 'Medium extinguisher','price' => 42.99, 'productType' => 'extinguisher','batch' => '00002']);
            \App\Models\product::factory(10)->create(['name' => 'Large extinguisher','price' => 49.99, 'productType' => 'extinguisher','batch' => '00003']);

            //Generate 30 signs
            \App\Models\product::factory(10)->create(['name' => 'Fire exit sign','price' => 9.50, 'productType' => 'sign','batch' => '00004']);
            \App\Models\product::factory(10)->create(['name' => 'No smoking sign','price' => 7, 'productType' => 'sign','batch' => '00005']);
            \App\Models\product::factory(10)->create(['name' => 'Fire alarm sign','price' => 8, 'productType' => 'sign','batch' => '00006']);

            //Generate 30 blankets
            \App\Models\product::factory(10)->create(['name' => 'small blanket','price' => 12.99, 'productType' => 'blanket','batch' => '00007']);
            \App\Models\product::factory(10)->create(['name' => 'medium blanket','price' => 17.50, 'productType' => 'blanket','batch' => '00008']);
            \App\Models\product::factory(10)->create(['name' => 'large blanket','price' => 19.99, 'productType' => 'blanket','batch' => '00009']);
            */



        //Generate posts
        \App\Models\post::factory(6)->create();

        \App\Models\department::factory()->create(['id' => '1','dept_name' => 'customer service']);
        \App\Models\department::factory()->create(['id' => '2','dept_name' => 'IT']);
        \App\Models\department::factory()->create(['id' => '3','dept_name' => 'sales']);

        $this->call(RolesSeeder::class);
        $this->call(AdminSeeder::Class);



    }
}
