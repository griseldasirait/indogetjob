@extends('layouts.app')
@section('title', 'HOME')

@section('content')
<div class="container">
    SELAMAT DATANG {{ Auth::user()->name }} !!!
    <br>
    <a href="{{ route('logout') }}">Log Out</a>
</div>
@endsection