<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class AdminController extends Controller
{
    //
    public function index(){
        return view('admin');
    }

    public function adminUsers(){
        $users = user::paginate(10);

        return view('adminUsers',[
            'users' => $users
        ]);
    }
}
