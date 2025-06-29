@extends('layouts.app')

@section('title', 'Manajemen User')

@section('content')
<div class="container mx-auto px-4 mt-6">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-semibold">Daftar Pengguna</h1>
        <a href="{{ route('admin.users.export') }}"
           class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md">
            Export Excel
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 text-green-600">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="w-full table-auto border border-gray-300">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-4 py-2">#</th>
                    <th class="border px-4 py-2">Nama</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                        <td class="border px-4 py-2">{{ $user->name }}</td>
                        <td class="border px-4 py-2">{{ $user->email }}</td>
                        <td class="border px-4 py-2 flex gap-2">
                            <a href="{{ route('admin.users.show', $user->id) }}"
                               class="text-blue-600 hover:underline">Detail</a>

                            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                @if($users->isEmpty())
                    <tr>
                        <td colspan="4" class="text-center p-4 text-gray-500">Tidak ada data pengguna.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
