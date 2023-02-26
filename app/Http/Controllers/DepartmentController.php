<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    public function index(){

        $users = user::where('department_id',1)->get();


        return view('department', [
            'users' => $users
        ]);
    }

    public function department(){
        $id = Auth::id();
        $department =
        $users = user::where('department_name','customer service')->get();

        return view('department', [
            'users' => $users
        ]);
    }

}
