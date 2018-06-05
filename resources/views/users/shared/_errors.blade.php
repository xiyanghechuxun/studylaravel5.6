	<!-- 显示验证错误的信息 -->
	<!-- (count($errors) > 0) 也可以 -->
	@if( $errors->any() )
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif

