<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    public function index(){
        $type = request('type');
        $pg = request('pg');
        $author = request('author');
        $length = request('length');
        if ($type == '') {
            $products = Product::all();
        }elseif($type == 'game'){
            $products = Product::all()
            ->where('type','=',$type)
            ->where('pg', '=',$pg)
            ->orwhere('pg','=','');
        }elseif($type == 'book'){
            $products = Product::all()
            ->where('type','=',$type)
            ->where('author', '=',$author)
            ->orwhere('author','=','');
        }elseif($type == 'film'){
            $products = Product::all()
            ->where('type','=',$type)
            ->where('pg', '=',$pg)
            ->orwhere('pg','=','');
        }else{
            $products = Product::all()->where('type','=',$type);
        }
        
        return view('products', [
            'products' => $products
        ]);
    }

    public function show($id){
        $product = product::findorfail($id);
    return view('product', ['product' => $product]);
    }
}
