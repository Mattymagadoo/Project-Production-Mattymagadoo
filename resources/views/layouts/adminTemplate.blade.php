@extends('layouts.master')

@section('content')


    <div class="flex bg-red-600 h-32rem">
    <div class="flex-none w-60 border-r-2 border-black">
        <a class="tablinks block w-full h-12 pt-2 px-3 text-lg border-b border-black bg-gray-300 text-left" href="/adminUsers"><img src="images/user.png" class="h-6 inline mr-6" alt="user-logo">Users</a>
        <a class="tablinks block w-full h-12 pt-2 px-3 text-lg border-b border-black bg-gray-300 text-left" href="/admin"><img src="images/user.png" class="h-6 inline mr-6" alt="user-logo">Admin</a>
        <a class="tablinks block w-full h-12 pt-2 px-3 text-lg border-b border-black bg-gray-300 text-left" href="/admin"><img src="images/user.png" class="h-6 inline mr-6" alt="user-logo">Admin</a>
    </div>
    <div class="flex-1 bg-gray-400">
        @yield('adminContent')
    </div>
</div>
@stop
