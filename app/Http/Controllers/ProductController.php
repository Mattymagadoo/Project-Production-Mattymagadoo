<?php

namespace App\Http\Controllers;

use App\Models\attribute;
use Illuminate\Http\Request;
use App\Models\product;
use GrahamCampbell\ResultType\Success;

class ProductController extends Controller
{
    public function index(){
        $type = request('type');
        $pg = request('pg');
        $pages = request('pages');
        $length = request('length');
        $products = Product::all();

        if($type != null){
           $products = $products->where('type','=',$type); 
        }
        
        if($pg != null){
            $products = $products->where('pg','=',$pg);
        }

        if($pages != null){
            $products = $products->where('pages','=',$pages);
        }

        if($length != null){
            $products = $products->where('length','=',$length);
        }

        return view('products', [
            'products' => $products
        ]);
    }

    public function show($id){
        $product = product::findorfail($id);
    return view('product', ['product' => $product]);
    }

    public function edit($id){
        $product = product::findorfail($id);
    return view('editProduct', ['product' => $product]);
    }

    public function update(Request $request,$product){
        $input = $request->all();
        $product = Product::find($product);
        $product->name = $input['name'];
        $product->description = $input['description'];
        $product->price = $input['price'];
        $product->type_ID = $input['type'];

        $product->save();
        return redirect('/')->with('success', 'Post Updated!');
    }

    public function delete($id) 
       {
          $product = Product::findorfail($id)->delete();
          echo ("User Record deleted successfully.");
          return redirect('/products');
       }
}
