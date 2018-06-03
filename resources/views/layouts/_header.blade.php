<header class="navbar navbar=fixed-top navbar-inverse">
	<div class="container">
		<div class="col-md-offset-1 col-md-10">
			<a href="{{ url('/') }}" id="logo">Sample App</a>
			<nav>
				<ul class="nav navbar-nav navbar-right">
					<!-- 方法一(推荐使用) -->
					<!-- <li><a href="{{ url('help') }}">帮助</a></li> -->

					<!-- 方法二 route()方法，需要在路由中指定名称,如Route::get('/help','XxController@help')->name('help') -->
					<li><a href="{{ route('help') }}">帮助</a></li>
					<li><a href="#">登陆</a></li>

				</ul>
			</nav>
		</div>
	</div>
</header>