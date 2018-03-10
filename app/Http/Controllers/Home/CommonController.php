<?php

namespace App\Http\Controllers\Home;

use App\Models\Config;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class CommonController extends Controller
{
    public function __construct(){
        $config = Config::all();
        View::share( 'config',$config );
    }

}
