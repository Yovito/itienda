<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;

class categoryController extends Controller{

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(){
      //
      $categories = Category::all();
      //dd($category);

      return view('Admin.category.index', compact('categories'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(){
      //
      return view('Admin.category.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request){
      //
      $this->validate($request,[
        'name' => 'required|unique:categories|max:255',
        'color' => 'required'
      ]);
      $category = Category::create([
          'name' => $request->get('name'),
          //dublicates the name for the slug
          'slug' => str_slug($request->get('name')),//why? because there's no slug on the view
          'description' => $request->get('description'),
          'color' => $request->get('color')
      ]);


      $message = $category ? 'Category added correctly' : 'Error: not added!';

      // route method calling web.php resource
      return redirect()->route('admin.category.index')->with('message', $message);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show(Category $category){
      //
      return $category;
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit(Category $category){
      //
      return view('Admin.category.edit', compact('category'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Category $id){
      //
      $this->validate($request,[
        'name' => 'required|unique:categories|max:255',
        'color' => 'required'
      ]);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
      //
  }

}
