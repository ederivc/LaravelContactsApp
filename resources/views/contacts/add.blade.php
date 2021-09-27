@extends('layout.app')

@section('content')
<div class="container register__wrapper">
  <h1 class="text-center pt-5 title">Add Contact</h1>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form action=" {{ route('contacts.add', auth()->user()) }} " method="post" enctype="multipart/form-data" class="pt-4">
    @csrf
    <div class="row my-3 mt-0">
      <div class="col-12 col-md-6">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="col-12 col-md-6">
        <label for="phone" class="form-label">Phone</label>
        <input type="text" class="form-control" id="phone" name="phone">
      </div>
    </div>
    <div class="row my-3">
      <div class="col-12 col-md-6">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address">
      </div>
      <div class="col-12 col-md-6">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image">
      </div>
      <div class="col d-flex justify-content-end mt-3">
        <button type="submit" class="btn btn-primary login__btn py-2">Register</button>
      </div>
  </form>
</div>
@endsection