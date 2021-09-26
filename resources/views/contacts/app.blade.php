@extends('layout.app')

@section('content')
@foreach ($contacts as $contact)
<h1>{{ $contact }}</h1>
@endforeach
@endsection