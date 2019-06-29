<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class LogoutController extends Controller
{
    protected function logout(){
        Session::flush();
        return redirect()->route('index');
    } 
}
