@extends('adminlte::page')

@section('title', 'Contacts App Admin')

@section('content_header')
<h1 class="title text-center">Dashboard</h1>
@stop

@section('content')
<p>Welcome {{ auth()->user()->name }}</p>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin/index.css') }}">
@stop

@section('js')
@endsection