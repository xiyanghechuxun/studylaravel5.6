@extends('layouts.default')

<!-- 标题 -->
@section('title',$users->name)


<!-- 主题内容 -->
@section('content')
	<div class="row">
		<div class="col-md-offset-2 col-md-8">
			<div class="col-md-12">
				<div class="col-md-offset-2 col-md-8">
					<section class="user_info">
						<!-- 用户头像 -->
						@include('users.shared._user_info', ['users' => $users])
					</section>
				</div>
			</div>
		</div>
	</div>
@stop
