<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//处理用户退出操作
class SessionsController extends Controller
{
    //登陆页面
	public function create(){

		return view('sessions.create');
	}

	//登陆
	public function store(Request $request){

		//验证用户数据
		$credentials = $request->validate([
			'email' => 'required|email',
			'password' => 'required',
		],[
			'email.required' => '用户邮箱必须填写',
			'email.email' => '邮箱不正确',

			'password.required' => '密码必须填写',
		]);

		//Auth验证用户数据与数据库数据是否相等，记住我
		if(Auth::attempt($credentials,$request->has('remember'))){
			//登陆成功
			$request->session()->flash('success','欢迎回来！');
			return redirect()->intended('/users/1');
			
		}else{
			//登陆失败
			$request->session()->flash('danger','用户名或密码不正确');
			return redirect()->back();
			
		}
	}

	//退出
	public function destroy(Request $request){

		//退出
		Auth::logout();
		$request->session()->flash('success','您已经成功退出！');
		return redirect('login');
		// $request->session()->flush();
		// $request->session()->flush();
		// return redirect('/login');	
	}

}
