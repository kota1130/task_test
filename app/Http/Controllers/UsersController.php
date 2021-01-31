<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UsersController extends Controller
{
    public function search(Request $request){
        $users = User::all();
        return view('user_list', compact('users'));
    }

    public function create(Request $request){
        return view('user_create');
    }
}