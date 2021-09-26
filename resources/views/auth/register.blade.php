@extends('layout.app')

@section('content')
<div class="container register__wrapper">
  <h1 class="text-center pt-5 title">Create Account</h1>
  <form action="{{ route('register') }}" method="post" class="pt-4">
    @csrf
    <div class="row my-3 mt-0">
      <div class="col-12 col-md-6">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="col-12 col-md-6">
        <label for="lastName" class="form-label">Last name</label>
        <input type="text" class="form-control" id="lastName" name="lastName">
      </div>
    </div>
    <div class="row my-3">
      <div class="col-12 col-md-6">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      <div class="col-12 col-md-6">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone">
      </div>
    </div>
    <div class="row my-3">
      <div class="col-12 col-md-6">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
      <div class="col-12 col-md-6">
        <label for="confirmPassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
      </div>
    </div>
    <div class="col d-flex justify-content-end mt-3">
      <button type="submit" class="btn btn-primary login__btn py-2">Register</button>
    </div>
  </form>
</div>
@endsection