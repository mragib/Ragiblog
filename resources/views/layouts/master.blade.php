
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Md Ragib Shahriar's Blog</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <!-- Custom styles for this template -->
    <link href="/css/blog.css" rel="stylesheet">
  </head>

  <body>

 @include('layouts.nav')
 
       <div class="blog-header">
        <div class="container">
          <h1 class="blog-title">Movie Blog's</h1>
          <p class="lead blog-description">Feel free to write about movies.</p>
        </div>
      </div>
    </header>

    <main role="main" class="container">

      <div class="row">

 @yield('contain')<!-- /.blog-main -->

  @include('layouts.slidebar')<!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </main><!-- /.container -->

   @include('layouts.footer')
  </body>
</html>
