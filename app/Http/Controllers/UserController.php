<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index(){

        echo '首页列表';
    }

    //注册页面
    public function create(){

        return view('users.create');
    }

    /**
     * /users 用户注册
     * 
     * 写入数据库
     */
    public function store(Request $request){


        //验证用户数据
        $request->validate([
            'name' => 'required|max:200',                     //验证用户名
            'email' => 'required|email|unique:users',       //验证用户邮箱
            'password' => 'required|confirmed|min:6'      //验证密码
        ],[
            'name.required' => '用户名必须填写',          //用户名验证失败提示错误信息
            'name.max' => '用户名长度必须小于200字符',

            'email.required' => '邮箱必须填写',
            'email.email'   => '请输入正确的邮箱',
            'email.unique'  => '邮箱已存在，请重新填写',

            'password.required' => '密码必须填写',
            'password.min'  => '密码长度必须大于6'
        ]);

        //批量写入数据库
        $users = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $request->session()->flash('success','欢迎，这是一段非常奇特的旅程~');

        return redirect('/users');

        // print_r($_POST);  
    }

    //显示用户个人信息页面
    public function show(Request $request,$id){

        
        $users = User::find($id);



        return view('users.show',['users'=>$users]);
    }

    
    


    public function edit($id){
       echo $id;
    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }

}
