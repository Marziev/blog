<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('/css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-4">My blog</span>
          </a>
    
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="{{ route('posts.index') }}" class="nav-link">All Posts</a></li>
            <li class="nav-item"><a href="{{ route('posts.create') }}" class="nav-link">Add Post</a></li>
          </ul>
        </header>
      </div>
    <div class="container">
        @if(session()->has('status'))
        <p style="color: green">
            {{ session()->get('status') }}
        </p>
        @endif
        @yield('content')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

