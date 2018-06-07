@extends('layouts.default')

@section('title','首页列表')

@section('content');
<div class="col-md-offset-2 col-md-8" a>
	<h1>用户列表</h1>
	<ul class="users">
		@include('users._user')
	</ul>

	<div class="b">
		{!! $users->render() !!}
	</div>
	
</div>

<div class="clear"></div>
@stop
	<style>
  .gravatar {
  float: left;
  margin-left: 10px;
  max-width: 50px;
  border-radius: 50%;
	
}

.a{
	margin:0 auto;
}
.b{
	padding: 10px;
	margin-top: 100px;
}
  .clear{
  	clear: both;
  }

	</style>