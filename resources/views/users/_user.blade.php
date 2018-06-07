		@foreach($users as $user)
		<li>
			<img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar">
			<a href="{{ url('/users/'.$user->id) }}" class="username" >{{ $user->name }}</a>
			<form action="{{ url('/users/' . $user->id) }}" method="post">
				{{ csrf_field() }}
				{{ method_field('DELETE') }}
				<button type="submit" class="class=" btn-sm btn-danger delete-btn ">删除</button>
				
			</form>

		</li>
		@endforeach