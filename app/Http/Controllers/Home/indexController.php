<?php

namespace App\Http\Controllers\Home;

use App\Models\Config;
use App\Models\Issue;
use Illuminate\Http\Request;

class indexController extends CommonController
{
    //
    public function index(){
//        $user = DB::table('users')->where('id',2)->get();
//        dd($user);
        $lists = Issue::orderBy('created_at','desc')->simplePaginate(5);
        $config = Config::all();
        $webtitle = 'MyCheck007';
        return view('home.index',compact( 'lists','config','webtitle'));
    }
}
