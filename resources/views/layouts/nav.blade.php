    <header>
      <div class="blog-masthead">
        <div class="container">
          <nav class="nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="/posts/create">Write a Blog</a>
            <a class="nav-link" href="/login">Login</a>
            <a class="nav-link" href="/register">Register</a>
            
            @if(auth()->check())
            <a class="nav-link" href="/logout">Logout</a>
            <a class="nav-link ml-auto" href="#">{{auth()->user()->name}}</a>
            @endif
          </nav>
        </div>
      </div>

