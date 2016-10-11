<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        // make test data
        $fakeData = [
          [
            'name' => 'Super Heroes',
            'slug' => 'SH',
            'description' => 'this are from Marvel universe',
            'color' => '#440022'
          ],
          [
            'name' => 'Geek',
            'slug' => 'geek',
            'description' => 'this are from Linux Lovers',
            'color' => '#445500'
          ]
        ];

        Category::insert($fakeData);

        // DB::table('users')->insert([
        //     'name' => str_random(10),
        //     'email' => str_random(10).'@gmail.com',
        //     'password' => bcrypt('secret'),
        // ]);
    }
}
