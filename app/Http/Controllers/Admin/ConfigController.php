<?php

namespace App\Http\Controllers\Admin;

use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConfigController extends Controller
{
    /*
     * 首页
     */
    public function index()
    {
        $lists = Config::orderBy('id', 'asc')->get();
//        $data = Config::where('status','1')->orderBy('updated_at','desc')->paginate(2);
//        return $data;
        return view("admin.config.index", compact('lists'));
    }
}
