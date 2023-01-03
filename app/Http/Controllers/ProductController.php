<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index(){
        $type = request('type');
        if ($type == '') {
            $products = Product::all();
        }else{
            $products = Product::all()->where('type','=',$type); 
        }
        
        return view('products', [
            'products' => $products,
            'type' => $type
        ]);
    }

    public function show($id){
        $product = product::findorfail($id);
    return view('product', ['product' => $product]);
    }
}
