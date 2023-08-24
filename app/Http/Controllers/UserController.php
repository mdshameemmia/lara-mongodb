<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index',compact('users'));
    }


    public function edit(Request $request,$id)
    {
        $user = User::where('_id',$id)->select(['name','email'])->get();
        dd($user);
        
    }
}
