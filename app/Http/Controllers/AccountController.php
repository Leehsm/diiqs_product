<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use Session;

class AccountController extends Controller
{
    function dashboard(){

        $userId = Session::get('user')['name'];
        // dd($user = User::where('id',$userId)->get());


        return view('frontend.menu.myAccount.dashboard',['user'=>$userId]);
    }

    function accDetails(){
        return view('frontend.menu.myAccount.accDetails');
    }
}
