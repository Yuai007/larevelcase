<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Code;

class LoginController extends CommonController
{
    /**
     * 登录
     */
    public function login(){
        if ($input = Input::all()){
//            dd($input);
            $oldusername = $input['name'];
            if (empty($input['name']) || empty($input['password'])){
                return back()->with('msg','请输入用户名和密码')->with('oldusername',$oldusername);
            }
            $user = User::first();
            if ($user->name != $input['name'] || Crypt::decrypt($user->password) != $input['password']){
                return back()->with('msg','用户名或者密码错误')->with('oldusername',$oldusername);
            }
            session( ['user' => $user] );
            return redirect( 'admin/index' );

        }else{
            return view('admin.login');
        }
    }
    public function code(){
        $code =  new Code();
        $code->make();
        echo $code;
    }
    public function crypt(){
        $str = 'admin';
        echo Crypt::encrypt($str);
    }
    /**
     * 退出功能
     */
    public function logout(){
        session( ['user'=>null] );
        return redirect( 'admin/login' );
    }

}
