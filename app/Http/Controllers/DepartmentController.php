<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    public function index(){

        $dep_id = auth()->user()->department_id;
        $users = user::where('department_id',$dep_id)->get();


        return view('department', [
            'users' => $users
        ]);
    }



}
