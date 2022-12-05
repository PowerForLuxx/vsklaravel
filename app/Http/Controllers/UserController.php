<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_page(){
        return view('users',['user'=>User::all()]);
    }
}
