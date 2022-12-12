@extends('layouts.master')
 
@section('title', 'Page Title')
 
@section('content')
    <div class="inline-block bg-black w-full h-12 mb-4">
        <ul class="text-white text-center list-none h-full block relative">
            <li class="inline-block float-none w-auto px-5 h-full"><a href="/Assessment2/public/product" class="mx-auto text-lg">Product</a></li>
            <li class="inline-block float-none w-auto px-5 h-full"><a href="" class="mx-auto text-lg">Pants</a></li>
            <li class="inline-block float-none w-auto px-5 h-full"><a href="" class="mx-auto text-lg">Shoes</a></li>
            <li class="inline-block float-none w-auto px-5 h-full"><a href="" class="mx-auto text-lg">Accessories</a></li>
            <li class="inline-block float-none w-auto px-5 h-full"><a href="" class="mx-auto text-lg">Coats</a></li>
        </ul>
    </div>
    <div class="flex my-8">
        <div class="flex-1 w-72">
        </div>
        <div class=" w-3/4">
            <img src="{{URL::asset('/images/good looking man.jpg')}}" class="h-full w-full">
        </div>
        <div class="flex-1 w-72">
        </div>
    </div>
    <div class="flex mt-8 mb-20 max-h-80">
        <div class="flex-1 w-72">
        </div>
        <div class="w-1/6 mx-5">
            <img src="{{URL::asset('/images/office.jpg')}}" class=" h-5/6 w-full">
            <div><p class="bold text-2xl mt-3 ">Office Wear</p></div>
        </div>
        <div class="w-1/6 mx-5">
            <img src="{{URL::asset('/images/walking suit.jpg')}}" class="h-5/6 w-full">
            <div><p class="bold text-2xl mt-3 ">Suits</p></div>
        </div>
        <div class="w-1/6 mx-5">
            <img src="{{URL::asset('/images/images.jfif')}}" class="h-5/6 w-full">
            <div><p class="bold text-2xl mt-3 ">Summer</p></div>
        </div>
        <div class="w-1/6 mx-5">
            <img src="{{URL::asset('/images/jacket.jpg')}}" class="h-5/6 w-full">
            <div><p class="bold text-2xl mt-3 ">Casual</p></div>
        </div>
        <div class="flex-1 w-72">
        </div>
    </div>
    <footer>
        <div class="block h-24 bg-gray-500 border-gray-200 border-t-2 border-b-2">
            
        </div>
        <div class="block bg-gray-600">

        </div>
    </footer>
@stop