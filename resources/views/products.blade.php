@extends('layouts.master')

@section('title', 'Page Title')

@section('content')

<div class="container flex flex-wrap m-auto justify-between mx-auto test">
    <div class="w-1/4 h-min-52">
        <div class="bg-gray-200 h-auto align-top m-2.5">
            <form action="" target="_self" method="get">
                <input type="search" id="Search" name="search" placeholder="Search" class=" block">
                <input type="radio" id="Game" name="type" value="game">
                    <label for="game">Game</label><br>
                <input type="radio" id="Book" name="type" value="book">
                    <label for="book">Book</label><br>
                    <input type="radio" id="Film" name="type" value="film">
                    <label for="book">Film</label><br>
                <br>
                <label for="PG">PG:</label>
                <br>
                <select id="PG" name="pg">
                    <option></option>
                    <option value="U">U</option>
                    <option value="PG">PG</option>
                    <option value="A12">A12</option>
                    <option value="15">15</option>
                    <option value="18">18</option>
                </select>
                <br>
                <input type="text" id="Author" name="author" placeholder="Author..." >
                <br>
                <input type="number" id="Pages" name="pages" placeholder="Pages..." >
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    <div href="" class="flex-wrap w-3/4 border-solid border-slate-600 border">
        @foreach ($products as $product)

        <a href="products/{{$product->name}}" class=" w-52 h-72 inline-block justify-between m-2 mb-4">
            <h1>{{$product->name}}</h1>
            <p>{{$product->type}}</p>
            <!-- <p>{{$product->type}}</p> -->
            <p class=" mt-auto">£{{$product->price}}</p>
        </a>
        @endforeach

    </div>
</div>
@stop
