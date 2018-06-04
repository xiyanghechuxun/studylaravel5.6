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

    public function store(Request $request){

        print_r($_POST);  
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
