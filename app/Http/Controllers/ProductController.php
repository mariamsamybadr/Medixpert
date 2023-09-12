<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){
        $products=Product::all();
        return view('products.product',compact('products'));
        
    }
    public function show($id){
         $product=Product::find($id);
         return view('products.show',compact('product'));
    }
   
    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $products=new Product;
        $products->drug_name=$request->drug_name;
        $products->description=$request->description;
        $products->drug_image=$request->drug_image;
        $products->save();
        return redirect("/products");

    }
    public function edit($id){
        $product=Product::find($id);
        return view('products.edit',compact('product'));
    }
    public function update (Request $request ,$id){
        $product=Product::find($id);
        $product->drug_name=$request->drug_name;
        $product->description=$request->description;
        $product->drug_image=$request->drug_image;
        $product->save();
        return redirect('/products');
    }
   
    public function destroy($id){
        Product::destroy($id);
        return redirect('/products');
    }

    public function search(Request $request){
        $search = $request->search;

        $products=Product::where( function($query) use($search){
           $query->where('drug_name' , 'like' , "%$search%");
        }) ->get();

        return view('products.product', compact('products', 'search'));

    }
   
}