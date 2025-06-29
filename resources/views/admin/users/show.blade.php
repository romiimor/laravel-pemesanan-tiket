@extends('layouts.app')

@section('title', 'Detail User')

@section('content')
<div class="container mx-auto px-4 mt-6">
    <h1 class="text-2xl font-semibold mb-4">Detail Pengguna</h1>

    <div class="bg-white p-6 rounded shadow-md max-w-md">
        <p><strong>Nama:</strong> {{ $user->name }}</p>
        <p><strong>Email:</strong> {{ $user->email }}</p>
        <p><strong>Role:</strong> {{ $user->role }}</p>
        <p><strong>Dibuat pada:</strong> {{ $user->created_at->format('d-m-Y H:i') }}</p>

        <a href="{{ route('admin.users.index') }}"
           class="inline-block mt-4 bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-md">
            Kembali
        </a>
    </div>
</div>
@endsection
