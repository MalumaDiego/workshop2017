<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = new Product;
        $product->product_name = "Smart TV Sony 60p";
        $product->description = "4k 3D Led";
        $product->color = "Negro Metalico";
        $product->product_date_up = "11/10/2017";
        $product->product_date_down = "11/01/2018";
        $product->save();

        $product = new Product;
        $product->product_name = "Smart TV Sony 70p";
        $product->description = "4k Curvo";
        $product->color = "Gris Metalico";
        $product->product_date_up = "11/10/2017";
        $product->product_date_down = "11/01/2018";
        $product->save();

        $product = new Product;
        $product->product_name = "Smart TV Samsung 50p";
        $product->description = "4k 3D Curvo";
        $product->color = "Negro Mate";
        $product->product_date_up = "11/10/2017";
        $product->product_date_down = "11/01/2018";
        $product->save();
    }
}
