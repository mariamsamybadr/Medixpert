<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
  public function index(){
    $categories=Category::all();
    return view('categories.category',compact('categories'));
    
}
public function show($id){
     $category=Category::find($id);
     return view('categories.show',compact('category'));
}

public function create(){
    return view('categories.create');
}

public function store(Request $request){
    $categories=new Category;
    $categories->category_name=$request->category_name;
    $categories->save();
    return redirect("/categories");

}
public function edit($id){
    $category=Category::find($id);
    return view('categories.edit',compact('category'));
}
public function update (Request $request ,$id){
    $category=Category::find($id);
    $category->category_name=$request->category_name;
    $category->save();
    return redirect('/categories');
}

public function destroy($id){
    Product::destroy($id);
    return redirect('/categories');
}

public function search(Request $request){
    $search = $request->search;

    $categories=Category::where( function($query) use($search){
       $query->where('category_name' , 'like' , "%$search%");
    }) ->get();

    return view('categories.category', compact('categories', 'search'));

}

    
  
      
}
