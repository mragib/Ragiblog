@extends('layouts.master')



@section('contain')

<div class="col-sm-8 blog-main">
<h1>{{$post->title}}</h1>

{{$post->body}}

            <hr>

		<div class="comment">
		<ul class="list-group">

		@foreach($post->comment as $comment)


		<li class="list-group-item">
					<strong>
			{{$comment->created_at->diffForHumans()}}:&nbsp;
			{{$comment->user->name}}
		</strong>
		{{$comment->body}}
		</li>
		@endforeach
		</ul>
	</div>
{{--Add a comment--}}
<div class="card">
	<div class="card-block">
		
		<form method='POST' action="/posts/{{$post->id}}/comment">

			{{csrf_field()}}

			<div class="form-group">
				<textarea class="form-control" name="body" placeholder="Leave your comment" required></textarea>
			</div>

			<div class="form-group">
  				<button type="submit" class="btn btn-primary">Add Comment</button>
			</div>
		</form>

		@include('layouts.errors')
		
	</div>
</div>


		</div>

@endsection