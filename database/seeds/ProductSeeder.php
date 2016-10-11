<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(){
         // make test data
         $fakeData = [
           [
             'name' => 'Playera 1',
             'slug' => 'playera-1',
             'description' => 'this are from Marvel universe',
             'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
             'price' => 275.00,
             'image' => 'http://res.cloudinary.com/dm3xjx1bn/image/upload/v1475797272/nuevas-imagenes-batman-v-superman-3_v6ofpe.jpg',
             'visible' => 1,
             'created_at' => new DateTime,
             'updated_at' => new DateTime,
             'category_id' => 1
           ],
           [
             'name' => 'Playera 2',
             'slug' => 'playera-2',
             'description' => 'this are from Marvel universe',
             'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
             'price' => 200.00,
             'image' => 'http://res.cloudinary.com/dm3xjx1bn/image/upload/v1475797271/Captura_de_pantalla_de_2016-07-03_18-11-38_myjrp8.png',
             'visible' => 1,
             'created_at' => new DateTime,
             'updated_at' => new DateTime,
             'category_id' => 1
           ],
           [
             'name' => 'Playera 3',
             'slug' => 'playera-3',
             'description' => 'this are from Marvel universe',
             'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
             'price' => 300.00,
             'image' => 'http://res.cloudinary.com/dm3xjx1bn/image/upload/v1475797272/nuevas-imagenes-batman-v-superman-3_v6ofpe.jpg',
             'visible' => 1,
             'created_at' => new DateTime,
             'updated_at' => new DateTime,
             'category_id' => 1
           ],
           [
             'name' => 'Playera 4',
             'slug' => 'playera-4',
             'description' => 'this are from Marvel universe',
             'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
             'price' => 275.00,
             'image' => 'http://res.cloudinary.com/dm3xjx1bn/image/upload/v1475797272/nuevas-imagenes-batman-v-superman-3_v6ofpe.jpg',
             'visible' => 1,
             'created_at' => new DateTime,
             'updated_at' => new DateTime,
             'category_id' => 1
           ],
           [
             'name' => 'Playera 5',
             'slug' => 'playera-5',
             'description' => 'this are from Marvel universe',
             'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
             'price' => 100.00,
             'image' => 'http://res.cloudinary.com/dm3xjx1bn/image/upload/v1475797272/nuevas-imagenes-batman-v-superman-3_v6ofpe.jpg',
             'visible' => 1,
             'created_at' => new DateTime,
             'updated_at' => new DateTime,
             'category_id' => 2
           ],
           [
             'name' => 'Playera 6',
             'slug' => 'playera-6',
             'description' => 'this are from Marvel universe',
             'extract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
             'price' => 300.00,
             'image' => 'http://res.cloudinary.com/dm3xjx1bn/image/upload/v1475797271/Captura_de_pantalla_de_2016-07-03_18-11-38_myjrp8.png',
             'visible' => 1,
             'created_at' => new DateTime,
             'updated_at' => new DateTime,
             'category_id' => 2
           ]
         ];

         Product::insert($fakeData);

         // DB::table('users')->insert([
         //     'name' => str_random(10),
         //     'email' => str_random(10).'@gmail.com',
         //     'password' => bcrypt('secret'),
         // ]);
     }
}
