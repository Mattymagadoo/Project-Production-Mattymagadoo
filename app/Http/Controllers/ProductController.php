<?php

namespace App\Http\Controllers;

use App\Models\attribute;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\productTemplate;
use GrahamCampbell\ResultType\Success;
use SebastianBergmann\Template\Template;

class ProductController extends Controller
{
    public function index(){

        $products = productTemplate::all();


        /*$type = request('productType');
        $pg = request('pg');
        $pages = request('pages');
        $length = request('length');

        if($productType != null){
           $products = $products->where('productType','=',$productType);
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
        */

        return view('products', [
            'products' => $products
        ]);
    }

    public function show($name){
        $products = product::all()->where('name', '=', $name);
    return view('product', ['products' => $products]);
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
        $product->type_ID = $input['productType'];

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
