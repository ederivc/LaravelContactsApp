@extends('admin.index')

@section('content_header')
<h1 class="title text-center pt-3">Edit Address</h1>
@stop

@section('content')
<div class="container">

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>

  @endif
  <form action="{{ route('editAddress', $address) }}" method="post" enctype="multipart/form-data" class="pt-4">
    @if (Session::get('status'))
    <div class="alert alert-success">
      {{ Session::get('status') }}
    </div>
    @endif
    @csrf
    <div class="row my-3 mt-0">
      <div class="col-12 col-md-6">
        <label for="city" class="form-label">City</label>
        <input type="text" class="form-control" id="city" name="city" value={{ $address->city }}>
      </div>
      <div class="col-12 col-md-6">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" id="address" name="address" value={{ $address->address }}>
      </div>
    </div>
    <div class="row my-3">
      <div class="col-12 col-md-6">
        <label for="cardinality" class="form-label">Cardinality</label>
        <input type="text" class="form-control" id="cardinality" name="cardinality" value={{ $address->cardinality }}>
      </div>
      <div class="col-12 col-md-6">
        <label for="size" class="form-label">Size</label>
        <input type="text" class="form-control" id="size" name="size" value={{ $address->size }}>
      </div>
    </div>
    <div class="row my-3">
      <div class="col-12 col-md-6 form-group">
        <label for="image" class="form-label">Image</label>
        <input type="file" class="form-control" id="image" name="image">
      </div>
      <div class="col-12 col-md-6">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" cols="60" rows="2">{{ $address->description }}</textarea>
      </div>
    </div>
    <div class="row my-3">
      <div class="col-12 col-md-6 form-group">
        <img src="{{ URL::asset('/img/' . $address->image_path ) }}" class="card-img-top"
          alt="{{ $address->image_path }}" />
      </div>
    </div>
    <div class="col d-flex justify-content-end mt-3">
      <button type="submit" class="btn btn-primary custom__btn py-2">Add</button>
    </div>
  </form>
</div>
@endsection