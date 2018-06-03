@extends('layouts.default')


@section('content')
	<div class="jumbotron">
		<h1>Hello Laravel</h1>
		<p class="lead">
			你现在所看到的是<a href="htpp://www.mengzhihun.cn">夕阳何处寻博客</a>的主页
		</p>
		<p>一切，将从这里开始</p>
	
		<a href="{{ url('/signup') }}" class="btn btn-lg btn-success" role="button">现在注册</a>
	</div>
@endsection