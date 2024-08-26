@extends('layout.master')

@section('content')
    <a href="{{ route('login.index') }}">Login</a>
    <br>
    <a href="{{ route('password.request') }}">Esqueceu a senha</a>
    <h2>home</h2>
@endsection
