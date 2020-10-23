<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('users.index')->with('users', User::all());
    }

    public function makeAdmin(User $user){
        $user->role = 'admin';

         $user->save();

        return redirect(route('users.index'))->with('status', 'User Make Admin Successfully!');
    }
}
