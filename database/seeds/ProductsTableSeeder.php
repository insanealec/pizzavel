<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProductsTableSeeder extends Seeder
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
    	//Set up our categories first.
    	DB::table('categories')->insert([
    		[
                'id' => 1,
    			'name' => 'Pizza',
                'description' => '',
                'created_at' => $now,
                'updated_at' => $now,
    		],
    		[
                'id' => 2,
    			'name' => 'Specialty Pizza',
                'description' => '',
                'created_at' => $now,
                'updated_at' => $now,
    		],
    		[
                'id' => 3,
    			'name' => 'Bread',
                'description' => '',
                'created_at' => $now,
                'updated_at' => $now,
    		],
    	]);

    	//Now lets set up some default products.
        DB::table('products')->insert([
        	[
                'id' => 1,
	        	'name' => 'Garlic Bread',
	        	'description' => 'Our most popular bread.',
	        	'price' => 2.25,
                'created_at' => $now,
                'updated_at' => $now,
        	],
        	[
                'id' => 2,
	        	'name' => 'Pepperoni Pizza',
	        	'description' => 'The most generic, yet still tasty pizza.',
	        	'price' => 5,
                'created_at' => $now,
                'updated_at' => $now,
        	],
        	[
                'id' => 3,
	        	'name' => 'Supreme',
	        	'description' => 'One of the best pizzas you can get.',
	        	'price' => 8,
                'created_at' => $now,
                'updated_at' => $now,
        	],
        ]);

        //Now we put those products in our categories.
        DB::table('product_categories')->insert([
            [
                'product_id' => 1,
                'category_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 2,
                'category_id' => 1,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'product_id' => 3,
                'category_id' => 2,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
