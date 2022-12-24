@extends('layouts.master')
 
@section('title', 'Page Title')

@section('content')

<p>{{$type}}</p>

<div class="inline-block bg-black w-full h-12 mb-6">
    <ul class="text-white text-center list-none h-full block relative">
        <li class="inline-block float-none w-auto px-5 h-full"><a href="/Assessment2/public/product" class="mx-auto text-lg">Product</a></li>
        <li class="inline-block float-none w-auto px-5 h-full"><a href="" class="mx-auto text-lg">Pants</a></li>
        <li class="inline-block float-none w-auto px-5 h-full"><a href="" class="mx-auto text-lg">Shoes</a></li>
        <li class="inline-block float-none w-auto px-5 h-full"><a href="" class="mx-auto text-lg">Accessories</a></li>
        <li class="inline-block float-none w-auto px-5 h-full"><a href="" class="mx-auto text-lg">Coats</a></li>
    </ul>
</div>
<div class="container flex flex-wrap m-auto justify-between mx-auto">
    <div class=" w-1/4 h-min-52">
        <div class=" bg-red-600 h-28 align-top m-2.5">
            <form action="" target="_self" method="get">
                <input type="radio" id="shirt" name="type" value="shirt">
                <label for="shirt">Shirts</label><br>
                <input type="radio" id="pants" name="type" value="pants">
                <label for="pants">Pants</label><br>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    <div href="" class="flex-wrap w-3/4 border-solid border-slate-600 border">
        @foreach ($products as $product)
        <a href="products/{{$product->id}}" class=" w-52 h-72 inline-block justify-between m-2">
            <img src="{{$product->image}}" class=" h-4/5 w-full">
            <h1>{{$product->title}}</h1>
            <!-- <p>{{$product->type}}</p> -->
            <p class=" mt-auto">£{{$product->price}}</p>
        </a>
        @endforeach
    </div>
</div>
@stop