<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Replyinformation;
use Session;


class ReplyController extends Controller
{

    public function update(Request $request)
    {   
        if (Session::has('user')){
            $messenge = Replyinformation::where('towho', $request->id)->get();
            $user= Session::get('user');
            $user =$user[0];
            $user = $user->username;
        }
        if (Session::has('admin')){
            $messenge = Replyinformation::where('towho', $request->id)->get();
            $user= Session::get('admin');
            $user =$user[0];
            $user = $user->username;
        }
        return view ('reply',['messenge'=>$messenge,'name'=>$user]);   
    }

}
