@extends('layout.master')

@section('content')

    @php
        dump(session()->all())
    @endphp

    <a href="{{ route('home') }}">Home</a>
    <h2>resetar senha</h2>

    <form action="{{ route('password.email') }}" method="POST">
        @csrf
        <input type="text" name="email" id="email" value="suitec@suitec.com.br">
        @error('email')
            <span>{{ $message }}</span>
        @enderror

        <button type="submit">Enviar</button>
    </form>
@endsection
