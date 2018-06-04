
	<!-- 用户头像 全局通用局部视图，用于周女士用户的头像和用户的基本信息 -->
	<a href="{{ url('/users.show'),$users->id }}">
		<img src="{{ $users->gravatar('140') }}" alt="{{$users->name}}" class="gravatar">
	</a>
	
	<h1>{{ $users->name }}</h1>

	<style>
  .gravatar {
  float: left;
  margin-left: 250px;
  max-width: 50px;
  border-radius: 50%;
	
}	
  h1 {
  	clear: both;
  	padding-top: 15px;
    font-size: 1.4em;
    letter-spacing: -1px;
    margin-bottom: 3px;
    margin-top: 15px;
    font-weight: bold;
  }

	</style>
