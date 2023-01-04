<?php

namespace App\Http\Controllers;

use App\Models\attribute;
use Illuminate\Http\Request;
use App\Models\product;

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

        $attribute = attribute::find(1);

        return view('products', [
            'products' => $products,
            'attribute' => $attribute
        ]);
    }

    public function show($id){
        $product = product::findorfail($id);
    return view('product', ['product' => $product]);
    }
}
