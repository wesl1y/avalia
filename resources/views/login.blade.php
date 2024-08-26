@extends('master')

@section('content')
    <a href="{{ route('home') }}">Home</a>
    <h2>Login</h2>

    <form action="{{ route('login.auth') }}" method="POST">
        @csrf
        <input type="text" name="email" id="email" value="suitec@suitec.com.br">
        @error('email')
            <span>{{ $message }}</span>
        @enderror
        <input type="text" name="password" id="password" value="s3duc@suitec">
        @error('password')
        <span>{{ $message }}</span>
    @enderror
        <button type="submit">Enviar</button>
    </form>
@endsection
