<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class indexController extends Controller
{
    //
    public function index(){
//        $user = DB::table('users')->where('id',2)->get();
//        dd($user);
        return view('home.index');
    }
}
