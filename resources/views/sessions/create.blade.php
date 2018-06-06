@extends('layouts.default')

<!-- 登陆 -->
@section('title', '登录')

<!-- 主体内容 -->
@section('content')
	<div class="col-md-offset-2 col-md-8">
		<div class="panel-heading">
			<h5 style="font-size:32px;padding-top:10px;text-align:center;">登陆</h5>
		</div>
	
		<div class="panel-body">
			<!-- 错误页面提示 -->
			@include('users.shared._errors')
			
			<form action="{{ url('/login') }}" method="post">
				<div class="form-group">
					<label for="email">邮箱：</label>
					<input type="text" name="email" class="form-control" value="{{old('email')}}">
				</div>

				<div class="form-group">
					<label for="password">密码：</label>
					<input type="password" name="password" class="form-control" value="{{old('password')}}">
				</div>
				
				<div class="checkbox">
					<label><input type="checkbox" name="remember">记住我</label>
				</div>

				{{csrf_field()}}

				<button type="submit" class="btn btn-primary">登陆</button>

			</form>
			
			<hr>

			<p>还没账号？<a href="{{ url('/users/create') }}">现在注册</a></p>


		</div>

	</div>
@stop

