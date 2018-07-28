@extends('layouts.master')


@section('contain')

<div class="col-sm-8 blog-main">
   <h3>Create a Post</h3>

   <form method="POST" action="/posts">
   	{{csrf_field()}}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="string" class="form-control" id="body" name='title'> 
  </div>

  <div class="form-group">
    <label for="body">Body</label>
    <textarea id="body" class='form-control' name='body'></textarea>
  </div>
<div class="form-group">
  <button type="submit" class="btn btn-primary">Publish</button>
</div>

@include('layouts.errors')



</form>




</div>
@endsection