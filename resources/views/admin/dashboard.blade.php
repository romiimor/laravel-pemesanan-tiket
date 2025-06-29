@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-10">
    <h1 class="text-2xl font-bold mb-4">Daftar Pengguna</h1>

    <table class="min-w-full border">
        <thead class="bg-gray-100">
            <tr>
                <th class="text-left p-2 border">Nama</th>
                <th class="text-left p-2 border">Email</th>
                <th class="text-left p-2 border">Tanggal Daftar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>
                <a href="{{ route('admin.users.show', $user->id) }}">Detail</a> |
                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style="display:inline;">
                  @csrf
                  @method('DELETE')
                  <button onclick="return confirm('Yakin hapus user ini?')">Hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
