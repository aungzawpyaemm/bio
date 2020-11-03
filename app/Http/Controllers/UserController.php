<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\User\UpdateUserRequest;
class UserController extends Controller
{
    public function index(){
        return view('users.index')->with('users', User::paginate(15));
        
    }

    public function makeAdmin(User $user){
        $user->role = 'admin';

         $user->save();

        return redirect(route('users.index'))->with('status', 'User Make Admin Successfully!');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit')->with('user',$user);
       
    }

    public function update(UpdateUserRequest $request, User $user)
    {

        $user -> update([
            'name' => $request->name,
            
        ]);
    
        return redirect(route('users.index'))->with('status', 'Update Profile Successfully!');
    }
}
