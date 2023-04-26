@extends('layouts.master')

@section('title', 'Page Title')

@section('content')

<div class="align-middle justify-center">

    <form action="post-create" method="POST" class="w-3/5 mx-auto my-24 border-gray-300 bg-gray-100 rounded-lg">
        @csrf
        @method('POST')
        <div class="h-16 bg-gray-400 rounded-t-lg py-4 content-center">
            <h1 class="text-center text-3xl">Create New Post</h1>
        </div>
        <div class="p-6">
            <div class="flex gap-8 mb-6">
                <p class="flex-none">Description:</p>
                <textarea class="flex-1" id="Description" name="description"></textarea>
            </div>
            <div class="mb-1 flex">
                <input type="file" name="image" class="flex-1">
                <input type="submit" value="Create" class="flex-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 text-center right-0 ml-auto md:mr-0 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
            </div>
            <div>

            </div>
        </div>
    </form>
</div>

@stop
