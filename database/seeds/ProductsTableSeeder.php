<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
// use DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Set up our product types first.
    	DB::table('product_types')->insert([
    		[
    			'name' => 'Pizza'
    		],
    		[
    			'name' => 'Specialty Pizza'
    		],
    		[
    			'name' => 'Bread'
    		],
    	]);

    	//Now lets set up some default products.
        DB::table('products')->insert([
        	[
	        	'name' => 'Garlic Bread',
	        	'description' => 'Our most popular bread.',
	        	'price' => 2.25,
	        	'type' => 3
        	],
        	[
	        	'name' => 'Pepperoni Pizza',
	        	'description' => 'The most generic, yet still tasty pizza.',
	        	'price' => 5,
	        	'type' => 1
        	],
        	[
	        	'name' => 'Supreme',
	        	'description' => 'One of the best pizzas you can get.',
	        	'price' => 8,
	        	'type' => 2
        	],
        ]);
    }
}
