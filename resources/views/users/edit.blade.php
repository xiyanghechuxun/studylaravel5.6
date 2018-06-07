@extends('layouts.default')

@section('title','更新个人资料')


@section('content')

<div class="col-md-offset-2 col-md-8">
	<div class="panel-heading">
		<h5 style="font-size:20px;margin-left:50%;font-weight:bold;">更新个人资料</h5>
	</div>
	
	<div class="panel-body">
		@include('users.shared._errors')

		<div class="gravatar_edit">
			<a href="http://gravatar.com/emails" target="_blank">
				<img src="{{ $users->gravatar('200') }}" alt="{{ $users->name }}" class="gravatar">		
			</a>
		</div>

		<form action="{{ url('users/'.$users->id) }}" method="post">
			{{ csrf_field() }}
			{{ method_field('PATCH') }}

			<div class="form-group">
				<label for="name">名称：</label>
				<input type="text" name="name" class="form-control" value="{{ $users->name }}">
			</div>

			<div class="form-group">
				<label for="email">邮箱：</label>
				<input type="text" name="email" class="form-control" value="{{ $users->email }}" disabled>
			</div>
			
			<div class="form-group">
				<label for="password">密码：</label>
				<input type="text" name="password" class="form-control" value="{{ old('password') }}">
			</div>

			<div class="form-group">
				<label for="password_confirmation">确认密码：</label>
				<input type="password" name="password" class="form-control" value="{{ old('password') }}">
			</div>

			<button type="submit" class="btn btn-primary">修改</button>


		</form>
	</div>
</div>
<div class="clear"></div>
@stop
	<style>
  .gravatar {
  /*float: left;*/
  margin-left: 50%;
  max-width: 50px;
  border-radius: 50%;
	
}	

  .clear{
  	clear: both;
  }

	</style>