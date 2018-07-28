  @extends ('layouts.master')


   @section ('contain')
<div class="col-sm-8 blog-main">

  @foreach($posts as $post)
    @include('posts.post')
  @endforeach


  @include('layouts.pagination')

 </div>

  @endsection
