@extends('admin.index')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
@endsection

@section('content_header')
<h1 class="title text-center pt-3">Address</h1>
@stop

@section('content')
<div class="table-responsive mt-2 p-3">
  <table class="table table-striped" id="address">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">City</th>
        <th scope="col">Address</th>
        <th scope="col">Cadinality</th>
        <th scope="col">Size</th>
        <th scope="col">Image</th>
        <th scope="col">Description</th>
        <th scope="col">Options</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($address as $address)
      <tr>
        <th scope="row">{{ $address->address_id }}</th>
        <td>{{ $address->city}}</td>
        <td>{{ $address->address }}</td>
        <td>{{ $address->cardinality }}</td>
        <td>{{ $address->size }}</td>
        <td><img src="{{ URL::asset('/img/' . $address->image_path ) }}" class="card-img-top"
            alt="{{ $address->image_path }}" style="height: 2rem;" /></td>
        <td>{{ $address->description }}</td>
        <td>
          <a href="{{ route('editAddress', $address) }}"><button type="button" class="btn btn-warning"><i
                class="fas fa-edit"></i></button></a>
          <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection

@section('js')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script>
  $(document).ready(function() {
    $('#address').DataTable();
} );
</script>
@endsection