@extends('layout.app')

@section('content')
<div class="login">
  <div class="login__info">
    <span>Login</span>
    <form action="{{ route('login') }}" method="post">
      @csrf
      <div class="mb-3">
        <label for="useremail" class="form-label">Email</label>
        <input type="email" class="form-control" id="useremail" name="useremail">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <button type="submit" class="btn btn-primary login__btn">Login</button>
    </form>
    <span class="login__link">
      ¿Aún no tienes cuenta? <a href="">Registrate</a>
    </span>
  </div>
  <div class="login__img">
    <img src="img/logo.svg" alt="logo">
  </div>
</div>
@endsection