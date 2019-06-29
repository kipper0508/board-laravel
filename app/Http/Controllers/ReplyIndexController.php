<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Replyinformation;

use Session;

class ReplyIndexController extends Controller
{
    public function update()
    {   
        if (Session::has('user')){
            $user= Session::get('user');
            $user =$user[0];
            $user = $user->username;
            $result = Replyinformation::where('usr', $user)->where('towho', '0')->get();
            return view ('replyindex',['messenge'=>$result,'name'=>$user]);
        }
        if (Session::has('admin')){
            $user= Session::get('admin');
            $user =$user[0];
            $user = $user->username;
            $result = Replyinformation::where('usr', $user)->where('towho', '0')->get();
            return view ('replyindex',['messenge'=>$result,'name'=>$user]);
        }
        
    }
}
