<!-- 显示闪存信息 -->

@foreach(['danger','warning','success','info'] as $msg)
	<!-- 判断会中中$msg键对应的值是否为空  -->
	@if (session()->has($msg))
		<div class="flash-message">
			<p class="alert alert-{{ $msg }}">
				<!-- 取出session()闪存对应的值并再页面显示 -->
				{{ session()->get($msg) }}
			</p>
		</div>
	@endif
@endforeach