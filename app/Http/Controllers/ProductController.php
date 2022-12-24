<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index(){
        $type = request('type');
        if ($type == 'shirt') {
            $products = Product::all()->where('type','=','shirt');
        }elseif($type =='pants'){
            $products = Product::all()->where('type','=','pants');
        }else{
           $products = Product::all(); 
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
