<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Contacts App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
  <nav class="navbar">
    <div class="navbar__brand">
      <a href="/">
        <img src="{{URL::asset('/img/logo.svg')}}" alt="logo" />
      </a>
    </div>
    <div class="navbar__hamburger menu-toggle" id="nav__hamburger">
      <span class="hamburger"></span>
      <span class="hamburger"></span>
      <span class="hamburger"></span>
    </div>
    <ul class="navbar__menu">
      @auth
      <li>
        <a href="{{ route('account', auth()->user()) }}" class=" navbar__link"> <i class="fas fa-user mr-2"></i>
          {{ auth()->user()->name }}</a>
      </li>
      <li><a href="{{ route('contacts', auth()->user()) }}" class="navbar__link">Contacts</a></li>
      @endauth
      <li><a href="{{ route('login') }}" class="navbar__link">Login</a></li>
      <li><a href="{{ route('register') }}" class="navbar__link">Register</a></li>
    </ul>
  </nav>

  @yield('content')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
  </script>
  <script src="{{ asset('js/index.js') }}"></script>
</body>

</html>