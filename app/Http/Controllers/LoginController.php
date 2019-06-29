<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Selfinformation;

use Session;
use DB;

class LoginController extends Controller
{
    protected function login(Request $request){
        $username=$request->usr;
        $password=$request->password;
        $usr = Selfinformation::where('username', '=', $username)->where('password', '=', $password)->where('type', '=', '0')->count();
        $admin = Selfinformation::where('username', '=', $username)->where('password', '=', $password)->where('type', '=', '1')->count();
        if($usr==1){
            $name = Selfinformation::where('username', '=', $username)->where('password', '=', $password)->get('username');
            Session::put('user',$name);
            return redirect()->route('index');
        }
        else if($admin==1){
            $name = Selfinformation::where('username', '=', $username)->where('password', '=', $password)->get('username');
            Session::put('admin',$name);
            return redirect()->route('index');
        }
        else{
            return redirect()->route('login');
        }
        
    }
}