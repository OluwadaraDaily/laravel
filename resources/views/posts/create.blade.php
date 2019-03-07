@extends ('layouts.app')

@section ('content')
	<div class="container">
		<div class="col-md-7">
			<h1> Create Post </h1>
			{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST'])  !!}
				<div class="form-group">
					{{Form::label('title', 'Title')}}
					{{Form::text('title', '', ['class' =>'form-control', 'placeholder'=> 'Post Title'])}}
				</div>

				 <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
			    <script>
			        CKEDITOR.replace( 'article-ckeditor' );
			    </script>
				
				<div class="form-group">
					{{Form::label('body', 'Body')}}
					{{Form::textarea('body', '', ['class' =>'form-control', 'placeholder'=> 'Body of the Post'])}}
				</div>
				{{Form::submit('Submit', ['class' =>'btn btn-primary'])}}
			{!! Form::close() !!}
		</div>
	</div>
@endsection