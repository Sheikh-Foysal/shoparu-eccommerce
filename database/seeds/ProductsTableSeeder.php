<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Product::class, 20)->create();
        $products = Product::select('id')->get();

        foreach($products as $product){
            $product->addMediaFromUrl('https://picsum.photos/640/480')->toMediaCollection('products');
        }
    }
}
