@extends('layouts.master')
 
@section('title', 'Page Title')

@section('content')
<img src='{{$product->image}}'>
<p>Product: {{$product->name}}</p>
<p>Description: {{$product->description}}</p>
<p>Type: {{$product->type}}</p>
<p>Price: {{$product->price}}</p>
<div>
    <form action="/Assessment2/public/products/{{$product->id}}" method="POST">
        @csrf
        @method('PATCH')
        <input type="text" id="Name" name="name" value="{{$product->name}}" >
        <textarea id="Description" name="description">{{$product->description}}</textarea>
        <input type="text" id="Price" name="price" value="{{$product->price}}">
        <label for="Type">PG:</label>
                <br>
                <select id="Type" name="type">
                    <option value="1">game</option>
                    <option value="2">book</option>
                    <option value="3">film</option>
                </select>
        <input type="submit" value="Submit">
    </form>
</div>

@stop