@extends('layout.master')

@section('content')

    @php
        dump(session()->all())
    @endphp

    <form action="{{ route('password.update') }}" method="POST">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <input type="text" name="email" value="suitec@suitec.com.br">
        @error('email')
            <span>{{ $message }}</span>
        @enderror


        <input type="text" name="password" placeholder="Nova Senha">
        @error('password')
            <span>{{ $message }}</span>
        @enderror


        <input type="text" name="password_confirmation" placeholder="Digite a Senha novamente">
        @error('password_confirmation')
            <span>{{ $message }}</span>
        @enderror


        <button type="submit">Enviar</button>
    </form>
@endsection
