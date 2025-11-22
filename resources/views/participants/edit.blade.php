@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Edit Peserta</h1>

<form method="POST" action="{{ route('participants.update', $participant->id) }}" class="space-y-4">
    @csrf @method('PUT')

    <input type="text" name="name" value="{{ $participant->name }}"
           class="w-full p-3 border rounded">

    <input type="email" name="email" value="{{ $participant->email }}"
           class="w-full p-3 border rounded">

    <input type="text" name="phone" value="{{ $participant->phone }}"
           class="w-full p-3 border rounded">

    <button class="bg-yellow-600 text-white px-4 py-2 rounded">Update</button>
</form>
@endsection
