@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Tambah Peserta</h1>

<form method="POST" action="{{ route('participants.store') }}" class="space-y-4">
    @csrf

    <input type="text" name="name" placeholder="Nama"
           class="w-full p-3 border rounded">

    <input type="email" name="email" placeholder="Email"
           class="w-full p-3 border rounded">

    <input type="text" name="phone" placeholder="Nomor Telepon"
           class="w-full p-3 border rounded">

    <button class="bg-blue-600 text-white px-4 py-2 rounded">Simpan</button>
</form>
@endsection
