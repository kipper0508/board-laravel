<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Replyinformation;
use App\Selfinformation;
use Session;

class IndexController extends Controller
{
    public function update()
    {   
        $result = Replyinformation::where('towho', '0')->get();
        if(Session::has('user')){
            $user= Session::get('user');
            $user =$user[0];
            $user = $user->username;
            return view ('index',['messenge'=>$result,'name'=>$user]);
        }
        if(Session::has('admin')){
            $user= Session::get('admin');
            $user =$user[0];
            $user = $user->username;
            return view ('index',['messenge'=>$result,'name'=>$user]);
        }
        return view ('index',['messenge'=>$result]);
       
    }

    public function getid(Request $result)
    {   
        //$messenge = Replyinformation::where('ID', $result->id)->get();
        if(Session::has('user')){
            $user= Session::get('user');
            $user =$user[0];
            $user = $user->username;
            return view ('comment',['id'=>$result->id , 'name'=>$user]);
        }
        if(Session::has('admin')){
            $user= Session::get('admin');
            $user =$user[0];
            $user = $user->username;
            return view ('comment',['id'=>$result->id , 'name'=>$user]);
        }

    }

    public function del(Request $result){   
        $usr= Replyinformation::where('ID', $result->id)->get('usr');
        $usr =$usr[0];
        $usr = $usr->usr;
        
        Selfinformation::
        where('username', $usr)
        ->decrement('turn');

        Replyinformation::where('ID', $result->id)->delete();
        Replyinformation::where('towho', $result->id)->delete();

        $result = Replyinformation::where('towho', '0')->get();
        if(Session::has('admin')){
            $user= Session::get('admin');
            $user =$user[0];
            $user = $user->username;
            return view ('index',['messenge'=>$result,'name'=>$user]);
        }
    }

}
