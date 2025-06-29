@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container mt-5" style="max-width: 400px;">
    <h3 class="mb-4 text-center">Login</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input value="{{ old('email') }}" type="email" name="email" class="form-control" required autofocus>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>

        <div class="text-center mt-3">
            Belum punya akun? <a href="{{ route('register') }}">Daftar</a>
        </div>
        

        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
</div>
@endsection
