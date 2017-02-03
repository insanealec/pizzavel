<?php

use Illuminate\Database\Seeder;

class ProductOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Get now for timestamps.
        $now = date('Y-m-d H:i:s');
        //Set up the options we can have.
        DB::table('product_options')->insert([
        	[
        		'id' => 1,
        		'name' => 'Pepperoni',
        		'description' => 'Delicious pork. Mmmmm.',
        		'option_type_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
        	],
        ]);
        //Set up the types of options.
        DB::table('option_types')->insert([
        	[
        		'id' => 1,
        		'name' => 'Topping',
                'created_at' => $now,
                'updated_at' => $now,
        	],
        	[
        		'id' => 2,
        		'name' => 'Crust',
                'created_at' => $now,
                'updated_at' => $now,
        	],
        ]);
        //Set up sizes that the options could possibly come in.
        DB::table('sizes')->insert([
        	[
        		'id' => 1,
        		'name' => 'Large',
        		'size' => '14 inches',
        		'price' => 8.50,
                'created_at' => $now,
                'updated_at' => $now,
        	],
        	[
        		'id' => 2,
        		'name' => 'Medium',
        		'size' => '12 inches',
        		'price' => 6.50,
                'created_at' => $now,
                'updated_at' => $now,
        	],
        ]);
        //Set up the prices of options at a certain size.
        DB::table('option_prices')->insert([
        	[
        		'id' => 1,
        		'product_option_id' => 1,
        		'size_id' => 1,
        		'price' => 0.75,
                'created_at' => $now,
                'updated_at' => $now,
        	],
        	[
        		'id' => 2,
        		'product_option_id' => 1,
        		'size_id' => 2,
        		'price' => 0.50,
                'created_at' => $now,
                'updated_at' => $now,
        	],
        ]);
    }
}
