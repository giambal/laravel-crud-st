<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" charset="utf-8"></script>
    <title>cars db</title>
  </head>
  <body>

    <header>
      <h1>SMARTPHONE DATABASE</h1>
    </header>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session('success'))
  <div class="alert alert-success">
        <div class="cont">
            {{ session('success') }}
        </div>
  </div>
@endif


      @yield('content')

    <footer>
      Database di Giammarco.
    </footer>

  </body>
</html>
