@extends ('layouts.app')

@section ('content')
	<a href="/posts" class="btn btn-secondary"> Go Back </a> <hr>
	<h3> {{ $post->title }} </a> </h3>
	<p> {!! $post->body !!} </p>
	<hr>
	<small> Post was created at {{ $post->created_at }}  by {{ $post->user->name }} </small> 
	<hr>
	

	{{-- Trying to prevent guests from seeing the delete and edit buttons  --}}

	@if(!Auth::guest())
	
		@if(Auth::user()->id == $post->user_id)

			<a href="/posts/{{ $post->id }}/edit" class="btn btn-primary"> EDIT POST </a> <br> <br>
			{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
				{{Form::hidden('_method', 'DELETE')}}
				{{Form::submit('Delete',['class' => 'btn btn-danger'])}}
			{!! Form::close() !!}

		@endif
	
	@endif

@endsection