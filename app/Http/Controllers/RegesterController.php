<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegesterController extends Controller
{
    public function create(){
        return view('regester');
    }


    public function store(){
       $attributes = request()->validate([
            'name'=>'required|max:50',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6'
        ]);

        // $attributes['password']= bcrypt($attributes['password']);

       $user= User::create($attributes);

        auth()->login($user);

        return redirect('/index');
     }
       
    
}
