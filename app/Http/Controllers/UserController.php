<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{

    //用于身份验证
    public function __construct(){
        $this->middleware('auth',[
            'except' => ['show','create','strore','index']
        ]);
    }


    public function index(){
        $users = User::paginate(20);
        

        return view('users.index',['users'=>$users]);
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
        $this->authorize('update', $user);

        //用户注册后自动登陆
        Auth::login($users);

        $request->session()->flash('success','欢迎，这是一段非常奇特的旅程~');

        return redirect('/users');

        // print_r($_POST);  
    }

    //显示用户个人信息页面
    public function show(Request $request,$id){

    
        $users = User::find($id);



        return view('users.show',['users'=>$users]);
    }

    
    

    //用户资料编辑变淡
    public function edit($id){

        $users = User::find($id);
       
        return view('users/edit',['users'=>$users]);
    }

    //用户编辑，写入数据库
    public function update(Request $request, $id){
        //验证用户数据
        $request->validate([
            'name' => 'required',
            'password' => 'required|min:6' 
        ],[
            'name.required' => '用户名必须填写',

            'password.required' => '密码必须填写',
            'password.min'  => '密码长度必须大于6'
        ]);
    
        $data = [];
        $data['name'] = $request->name;
        if($request->password){
            $data['password'] = bcrypt($request->password);
        }

        // $users = User::find($id);
        // dd($users);
        // $up = User::where('id',$id)->update($data);
        // dd($up);
        if(User::where('id',$id)->update($data)){
            $request->session()->flash('success','个人资料更新成功');
            return redirect('/users/4');
        }else{
            return back();
        }

        // dd($request->all());
    }

    public function destroy($id){
        $user = User::find($id);
        if($user->delete()){
            return redirect('/users')->with('info','用户删除成功');
        }else{
            return back()->with('info','用户删除失败');
        }
    }

}
