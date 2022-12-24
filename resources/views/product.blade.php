@extends('layouts.master')
 
@section('title', 'Page Title')

@section('content')
<img src='{{$product->image}}'>
<p> Product: {{$product->title}}</p>
<p> type: {{$product->description}}</p>
<p> price: {{$product->price}}</p>
@stop