@extends('layout.app')

@section('content')
<div class="login__wrapper">

  <div class="login">
    <div class="login__info">
      <span>Login</span>
      @if(session('status'))
      <div class="text-danger p-4">
        {{ session('status') }}
      </div>
      @endif
      <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email">
          @error('email')
          <div class="text-danger">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
          @error('email')
          <div class="text-danger">
            {{ $message }}
          </div>
          @enderror
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
</div>
@endsection