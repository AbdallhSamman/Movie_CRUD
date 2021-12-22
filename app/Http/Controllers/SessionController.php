<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function create()
    {
        return view('login');
    }

    public function store()
    {
               $attributes = request()->validate([
            'email'=>'required|email',
            'passsword'=>'required'
        ]);
        
        if (auth()->attempt($attributes)) {
            
         return  redirect('/index');
        }
        return redirect('/index')->withErrors(['email'=>'this email not exist']);
    }


    public function destroy(){
        auth()->logout();

        return redirect('/index');
    }
}
