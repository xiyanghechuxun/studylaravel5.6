<header class="navbar navbar=fixed-top navbar-inverse">
	<div class="container">
		<div class="col-md-offset-1 col-md-10">
			<a href="{{ url('/') }}" id="logo">Sample App</a>
			<nav>
		        <ul class="nav navbar-nav navbar-right">
		          @if (Auth::check())
		            <li><a href="{{ url('/users') }}">用户列表</a></li>
		            <li class="dropdown">
		            	<a href="" class="dropdown-toggle" data-toggle="dropdown">
							{{ Auth::user()->name }} <b class="caret"></b>
		            	</a>
						<ul class="dropdown-menu">
							<li><a href="{{ url('users/' . Auth::user()->id) }}">个人中心</a></li>
							<li><a href="{{ url('users/'.Auth::user()->id . '/edit') }}">编辑资料</a></li>
							<li class="divider"></li>
							<li>
								<a href="#" id="logout">
									<form action="/logout" method="post">
										{{ csrf_field() }}
										<input type="hidden" name="_method" value="DELETE">
										<button class="btn btn-block btn-danger" type="submit" name="button">退出</button>
									</form>
								</a>
							</li>
						</ul>
		            </li>
		          @else
		          	<li><a href="{{ url('/help') }}">帮助</a></li>
		          	<li><a href="{{ url('/login') }}">登陆</a></li>
		          @endif
		        </ul>





			</nav>
		</div>
	</div>
</header>