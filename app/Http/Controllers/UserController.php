<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        //Del modelo usuario, trae todos
        $users = User::all();
        return view('user.index', compact('users'));
    }
}
