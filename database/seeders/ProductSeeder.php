<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product1 = Product::create([
            'name'=>'Iphone Headphone',
            'price'=>400.50,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum sem et tellus euismod ullamcorper. Nullam mollis mi a tellus mollis mattis. Vivamus auctor ut dui a congue. Quisque pellentesque convallis efficitur.
                            Nam lacus libero, eleifend sed sem non, ornare ullamcorper erat.',
            'image'=>'iphone_headphone.jpeg',
            'category'=>'electronic'
        ]);

        $product1->save();

        $product2 = Product::create([
            'name'=>'Nokia Q-Watch52',
            'price'=>349.99,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum sem et tellus euismod ullamcorper. Nullam mollis mi a tellus mollis mattis. Vivamus auctor ut dui a congue. Quisque pellentesque convallis efficitur.
                            Nam lacus libero, eleifend sed sem non, ornare ullamcorper erat.',
            'image'=>'nokia-watch.jpeg',
            'category'=>'electronic'
        ]);

        $product2->save();

        $product3 = Product::create([
            'name'=>'iphone 5s',
            'price'=>2000,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum sem et tellus euismod ullamcorper. Nullam mollis mi a tellus mollis mattis. Vivamus auctor ut dui a congue. Quisque pellentesque convallis efficitur.
                            Nam lacus libero, eleifend sed sem non, ornare ullamcorper erat.',
            'image'=>'iphone_phone.jpeg',
            'category'=>'electronic'
        ]);

        $product3->save();

        $product4 = Product::create([
            'name'=>'Nikon LNX',
            'price'=>549.99,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum sem et tellus euismod ullamcorper. Nullam mollis mi a tellus mollis mattis. Vivamus auctor ut dui a congue. Quisque pellentesque convallis efficitur.
                              Nam lacus libero, eleifend sed sem non, ornare ullamcorper erat.',
            'image'=>'nikon.jpeg',
            'category'=>'electronic'
        ]);

        $product4->save();

        $product5 = Product::create([
            'name'=>'Logi457 Mouse',
            'price'=>150,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum sem et tellus euismod ullamcorper. Nullam mollis mi a tellus mollis mattis. Vivamus auctor ut dui a congue. Quisque pellentesque convallis efficitur.
                                            Nam lacus libero, eleifend sed sem non, ornare ullamcorper erat.',
            'image'=>'logi_mouse.jpeg',
            'category'=>'electronic'
        ]);

        $product5->save();

        $product6 = Product::create([
            'name'=>'Sony HeadPhone12',
            'price'=>200,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum sem et tellus euismod ullamcorper. Nullam mollis mi a tellus mollis mattis. Vivamus auctor ut dui a congue. Quisque pellentesque convallis efficitur.
             Nam lacus libero, eleifend sed sem non, ornare ullamcorper erat.',
            'image'=>'sony_headPhone.jpeg',
            'category'=>'electronic'
        ]);

        $product6->save();
    }
}
