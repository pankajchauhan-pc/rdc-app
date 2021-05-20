<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UsersController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where(['username'=>$request->username])->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return "Sorry, Your password is incorrect";
        }else{
            $request->session()->put('user',$user);
            return redirect('/');
        }

    }
}
