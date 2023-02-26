@extends('layouts.master')

@section('title', 'Page Title')

@section('content')
    <img alt="" src="images\NSI-Ext.png">
    <div class="flex my-8">
        <div class="flex-1 w-72">
        </div>
        <div class=" w-1/2 pl-10 pr-10">
            <p class="w-full align-middle text-center text-xl mb-8">Blog</p>
            @foreach ($posts as $post)
                <div class="border-2 mb-4 p-5 pb-1">
                    <div class="mb-2">
                        <img src="https://via.placeholder.com/200x200.png/002255?tex..." alt="example" class="w-7 h-7 rounded-full mr-2 inline">
                        <p class="inline">{{$post->user->name}}</p>
                    </div>
                    <!-- <p>{{$post->name}}</p> -->
                    <h1 class="text-xl mb-2">{{$post->post_title}}</h1>
                    <img src="https://via.placeholder.com/200x200.png/002255?tex..." alt="example" class="mb-2 w-full rounded-md">
                    <p class="mb-2">{{$post->post_body}}</p>
                    <p class="mt-auto text-right">{{$post->created_at}}</p>
                </div>
            @endforeach
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
