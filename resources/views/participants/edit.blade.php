@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Edit Participant</h1>

<form method="POST" action="{{ route('participants.update', $participant->id) }}" class="space-y-4 bg-white p-6 rounded shadow">
    @csrf @method('PUT')

    <div>
        <label class="block font-semibold">Name</label>
        <input type="text" name="name" value="{{ $participant->name }}" class="w-full border rounded p-2" required>
    </div>

    <div>
        <label class="block font-semibold">Email</label>
        <input type="email" name="email" value="{{ $participant->email }}" class="w-full border rounded p-2" required>
    </div>

    <div>
        <label class="block font-semibold">Phone</label>
        <input type="text" name="phone" value="{{ $participant->phone }}" class="w-full border rounded p-2" required>
    </div>

    <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
        Update
    </button>
</form>
@endsection
