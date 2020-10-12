<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UsersController extends Controller
{
    public function search(Request $request){

        $users = \DB::select('select * from users');
        return view('user_list',['users' => $users]);
    
}  
}
