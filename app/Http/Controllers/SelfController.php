<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Selfinformation;
use Session;


class SelfController extends Controller
{   
    public function imformation()
    {   
        if (Session::has('user')){
            $user= Session::get('user');
            $user =$user[0];
            $user = $user->username;
            $result = Selfinformation::where('username', $user)->get();
            return view ('self',['self'=>$result,'name'=>$user]);
        }
        if (Session::has('admin')){
            $user= Session::get('admin');
            $user =$user[0];
            $user = $user->username;
            $result = Selfinformation::where('username', $user)->get();
            return view ('self',['self'=>$result,'name'=>$user]);
        }
    }
}
