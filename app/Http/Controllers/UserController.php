<?php

namespace App\Http\Controllers;
use Illuminate\support\facades\Hash;
use Illuminate\Http\Request;
use App\models\User;

class UserController extends Controller
{
    function login(request  $req){

     $user = User::where(['email'=>$req->email])->first();
     
     if(!$user || !Hash::check($req->password,$user->password))
     {
      return "Username or password is not matched" ;   
     }
     else{

        $req->session()->put('user' ,$user);
        return redirect('/');
     }

    }

  function register(request $req){

    
    $user = new User;
    $user->name=$req->name;
     $user->email=$req->email;
      $user->password=Hash::make($req->password);
      $user->save();
     return redirect('/login');

   }
}
