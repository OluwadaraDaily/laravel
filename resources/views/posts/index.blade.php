@extends ('layouts.app')

@section ('content')
	@if (count($posts) > 0)
		@foreach ($posts as $post)
			<div class="well">
				<h3> <a href="/posts/{{ $post->id }}"> {{ $post->title }} </a> </h3>
				<small> Post was created at {{ $post->created_at }} by {{ $post->user->name }} </small>
			</div>
		@endforeach
		@else
		<p class="alert alert-danger"> No posts available </p>
	@endif
@endsection