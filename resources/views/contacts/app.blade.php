@extends('layout.app')

@section('content')
<div class="container-fluid contacts__wrapper">
  <h1 class="text-center pt-5 title">My Contacts</h1>
  <div class="row pt-4">
    @if($contacts->count())
    <div class="row col-9 d-flex">
      {{-- <div class="row"> --}}
      @foreach ($contacts as $contact)
      <div class="col col-sm-6 col-lg-4 pt-3">
        <div class="card" style="width: 18rem;">
          <img src="{{ URL::asset('/img/' . $contact->image_path ) }}" class="card-img-top mx-auto"
            alt="{{ $contact->image_path . 'image' }}" style="width: 6rem; height: 6rem;">
          <div class="card-body">
            <h5 class="card-title">{{ $contact->name }}</h5>
            <div class="p-2"><strong>Phone: </strong>{{ $contact->phone }}</div>
            <div class="p-2 pb-3"><strong>Address:
              </strong>{{ $contact->address }}</div>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      @endforeach
      {{-- </div> --}}
    </div>
    @else
    <div class="col-9 d-flex justify-content-center">
      <span class="h3">You have not added any contact yet</strong>
    </div>
    @endif
    <div class="col-3">
      <h4>Options</h4>
      <a href=" {{ route('contacts.add', auth()->user()) }} "><button type="submit"
          class="btn btn-primary login__btn">Add
          contact</button></a>
    </div>
  </div>
</div>
@endsection