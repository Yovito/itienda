<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
      $data = array(
    [
      'name' 		=> 'Yosved',
      'last_name' => 'Villar',
      'email' 	=> 'yosved.villar@gmail.com',
      'user' 		=> 'yvillar',
      'password' 	=> \Hash::make('123456'),
      'type' 		=> 'admin',
      'active' 	=> 1,
      'address' 	=> 'San Cosme 290, Cuauhtemoc, D.F.',
      'created_at'=> new DateTime,
      'updated_at'=> new DateTime
    ],
    [
      'name' 		=> 'Greysi',
      'last_name' => 'Davile',
      'email' 	=> 'greysidavila@gmail.com',
      'user' 		=> 'gdavila',
      'password' 	=> \Hash::make('zapaton'),
      'type' 		=> 'user',
      'active' 	=> 1,
      'address' 	=> 'Tonala 321, Jalisco',
      'created_at'=> new DateTime,
      'updated_at'=> new DateTime
    ],

  );

  User::insert($data);

  }
}
