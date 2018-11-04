<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

  //use $tbale if not is an tbale augenerate for the artisan
  protected $table = 'categories';

  //$fillate for the attribs that will be changes
	protected $fillable = ['name', 'slug', 'description', 'color'];

	public $timestamps = false;

  //Acordding to Relationships a 'Category' has many 'Products'
  public function products(){
      return $this->hasMany('App\Product');
  }

}
