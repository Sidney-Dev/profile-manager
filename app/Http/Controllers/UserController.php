<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

use App\Http\Requests\UserEditRequest;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function edit(){

        $user = User::whereId(Auth::id())->first();

        return view('profile/edit', compact('user'));
    }

    public function update(UserEditRequest $request, $id){

        $user = User::findOrFail(Auth::id());

        // Do not update the password if the field is empty
        if( trim($request->password) == '' ){
            $input = $request->except('password');
        } else {
            $input = $request->all();
            $input['password'] = bcrypt($request->password);
            $input['name'] = $request->name;
            $input['phone'] = $request->phone;
            $input['email'] = $request->email;
        }

        if($file = $request->file('image')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $input['image'] = $name;
        }

        $user->update($input);

        return redirect()->back();
    }

}
