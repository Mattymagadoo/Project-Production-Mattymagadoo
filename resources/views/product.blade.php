@extends('layouts.master')

@section('title', 'Page Title')

@section('content')
    @foreach($products as $product)

        <div class="border-b">
            <p>Product: {{$product->name}}</p>
            <p>Description: {{$product->description}}</p>
            <p>Type: {{$product->type}}</p>
            <p>Price: {{$product->price}}</p>

            <a href="{{$product->id}}/edit" class="underline"><p>Edit</p></a>
            <a href="{{$product->id}}/delete" class="underline"><p>Delete</p></a>
        </div>

    @endforeach



@stop
