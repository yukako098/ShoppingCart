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
        $product = new \App\Product([
            'imagePath' => 'https://dynamic.indigoimages.ca/books/1524763136.jpg?altimages=false&scaleup=true&maxheight=515&width=380&quality=85&sale=46&lang=en',
            'title' => 'BECOMMING',
            'description' => 'An intimate, powerful, and inspiring memoir by the former First Lady of the United States',
            'price' => '21.30'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51uuwa-5OgL._SX324_BO1,204,203,200_.jpg',
            'title' => 'Girl, Wash Your Face',
            'description' => 'Do you ever suspect that everyone else has life figured out and you don’t have a clue? If so, Rachel Hollis has something to tell you: that’s a lie.',
            'price' => '13.79'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51p5GTPnfOL._SY498_BO1,204,203,200_.jpg',
            'title' => 'The Wonky Donkey',
            'description' => 'Kids will love this cumulative and hysterical read-aloud!',
            'price' => '4.82'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51AEI3isFiL._SX327_BO1,204,203,200_.jpg',
            'title' => 'Fire and Fury: Inside the Trump White House',
            'description' => 'Fire and Fury: Inside the Trump White House',
            'price' => '13.95'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/416jD1EyieL._SX329_BO1,204,203,200_.jpg',
            'title' => 'Fear: Trump in the White House',
            'description' => 'THE INSIDE STORY ON PRESIDENT TRUMP, AS ONLY BOB WOODWARD CAN TELL IT.',
            'price' => '15.00'
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://images-na.ssl-images-amazon.com/images/I/51ZmhoZW9fL._SY487_BO1,204,203,200_.jpg',
            'title' => 'Last Week Tonight with John Oliver Presents a Day in the Life of Marlon Bundo',
            'description' => '100% of Last Week Tonight\'s proceeds will be donated to The Trevor Project and AIDS United.
HBO\'s Emmy-winning Last Week Tonight with John Oliver presents a children\'s picture book about a Very Special boy bunny who falls in love with another boy bunny.',
            'price' => '13.85'
        ]);
        $product->save();
    }
}
