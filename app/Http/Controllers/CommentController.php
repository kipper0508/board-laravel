<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Replyinformation;
use App\Selfinformation;
use Session;
use DB;

class CommentController extends Controller
{
    public function update(Request $request)
    {   
        if (Session::has('user')){
        $user= Session::get('user');
        $user =$user[0];
        $user = $user->username;
        }
        if (Session::has('admin')){
            $user= Session::get('admin');
            $user =$user[0];
            $user = $user->username;
        }
        $messenge = new Replyinformation();
        $messenge->content = $request->content;
        $messenge->usr = $user;
        $messenge->towho = $request->id;
        $messenge->save();
        Selfinformation::
        where('username', $user)
        ->increment('turn');
        /*DB::table('usr')
        ->where('username', $user)
        ->increment('turn');*/
        return redirect()->route('index');
    }
    
    public function index()
    {   
        if (Session::has('user')){
            $user= Session::get('user');
            $user =$user[0];
            $user = $user->username;
            return view('comment',['id'=>'0','name'=>$user]);
        }
        if (Session::has('admin')){
            $user= Session::get('admin');
            $user =$user[0];
            $user = $user->username;
            return view('comment',['id'=>'0','name'=>$user]);
        }
    }
    
}
