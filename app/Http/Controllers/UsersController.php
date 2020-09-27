<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UsersController extends Controller
{
    public function index(){
        $values = User::all();

        // dd($values);

        return view('user_list',compact('values'));
    }
}

