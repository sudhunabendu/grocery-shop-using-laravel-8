<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function SignUp(Request $req){
        $req->validate([
            'name' => 'required|max:150',
            'email' => 'required|email',
            'password' => 'required','min:6',
        ]);

       $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password =Hash::make($req->password);
        $user->save();
        return redirect('/');
    }

    public function login(Request $req){

        $user = User::where(['email'=>$req->email])->first();
        // return $user->password;
        if(!$user || !Hash::check($req->password,$user->password)){

            return "Email and Password are not match";
        }else{
            $req->session()->put('users',$user);
            return redirect('/');
        }
    }

    
}
