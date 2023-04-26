@extends('layouts.master')

@section('title', 'Department')

@section('content')
    <div>
        <div>
            <h1>
                Department: {{Auth::user()->department->dept_name}}
            </h1>
        </div>
        <div class="m-6 p-2 w-1/5 border-2">
            <h1 class="text-4xl">Contacts</h1>
            @foreach($users as $user)
                <div class="border mb-4">
                    <h1>Name: {{$user->name}}</h1>
                    <p>Email: {{$user->email}}</p>
                </div>
            @endforeach
        </div>
    </div>


@stop
