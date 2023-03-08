<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class usercontrollers extends Controller
{
    public function  register(){
        return view('user.register');
    }

    public function storeusers(Request $request){
        // dd($request->name);
     $usersformfields=$request->validate([
               'name'=>['required','min:3'],
               'email'=>['required','email',Rule::unique('users','email')],
               'password'=>'required|confirmed|min:6' ,

     ]);  
     //lets now make our password hashed

     $usersformfields['password']=bcrypt( $usersformfields['password']);
    //lets now insert into the table of user
      $user=User::create($usersformfields);
      
      auth()->login($user);

       return redirect('/')->with('message','User craeted successfully');
    }


    ///lets logouts
    public function logout(Request $request){
        // dd($request);

    auth()->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/')->with('message','You have been logged out..!');

    }
    public function login(){
        return view('user.login');
    }
    public function authenicate(Request $request ){
        // dd($request);
        $userdetails=$request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        if(auth()->attempt($userdetails)){
              $request->session()->regenerate();
              return redirect('/')->with('message','You have logged in successfully');
        }
        return  back()->withErrors(['email'=>'invalid credentials'])->onlyInput('email');
   
    }


}
