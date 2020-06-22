@extends('layouts.app')
@section('title', 'DAFTAR')

@section('content')
<div class="container" style="margin-top:6%;">
    <div class="row">
        <div class="col" style="margin-right:6%;">
            <h2 align="center" style="color:#001f90; font-weight:bold; margin-bottom:7.5%;">DAFTAR</h2>
            <br>
            <div class="container"  style="padding:0; margin:0 auto;">
                <div class="btn-group btn-group-lg btn-block text-center">
                    <button type="button" class="btn btn-outline-primary" style="border-radius: 10px 10px 10px 10px;">Pelamar Kerja</button>
                    <button type="button" class="btn btn-outline-primary active" style="border-radius: 10px 10px 10px 10px;">Perusahaan</button>
                </div>
            </div>
            <br>
            <form action="{{ route('register') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group" style="margin-top:3.5%;">
                    <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nama perusahaan" required autofocus>
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                <div class="form-group" style="margin-top:6.5%;">
                    <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
                <div class="form-group" style="margin-top:6.5%;">
                    <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <div class="invalid-feedback">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                </div>
                <div class="container" style="margin-top:7%;">
                    <div class="text-center">
                        <button class="btn btn-outline-success btn-lg" type="submit" style="border-radius: 10px 10px 10px 10px;">DAFTAR</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col" style="margin-left:6%;">
            <img src="{{ asset('img/drawkit-grape-pack-illustration-7.svg') }}" alt="">
        </div>
    </div>
</div>
@endsection