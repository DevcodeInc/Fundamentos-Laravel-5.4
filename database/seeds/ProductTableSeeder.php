<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Iphone 8',
            'price' => 1500,
            'description' => 'Nuevo Iphone 8'
        ]);
    }
}
