<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        App\Products::truncate();
        
        factory(App\Products::class, 50)->create();  
    }
}
