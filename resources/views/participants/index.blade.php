@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Daftar Peserta</h1>

<a href="{{ route('participants.create') }}" 
   class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">
   + Tambah Peserta
</a>

<table class="min-w-full bg-white shadow rounded">
    <thead>
        <tr class="border-b">
            <th class="p-3 text-left">Nama</th>
            <th class="p-3 text-left">Email</th>
            <th class="p-3">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($participants as $p)
        <tr class="border-b">
            <td class="p-3">{{ $p->name }}</td>
            <td class="p-3">{{ $p->email }}</td>
            <td class="p-3 space-x-2">
                <a href="{{ route('participants.show', $p->id) }}" class="text-blue-500">Lihat</a>
                <a href="{{ route('participants.edit', $p->id) }}" class="text-yellow-500">Edit</a>
                <form action="{{ route('participants.destroy', $p->id) }}" method="POST" class="inline">
                    @csrf @method('DELETE')
                    <button class="text-red-500">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
