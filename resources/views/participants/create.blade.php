@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Add New Participant</h1>

<form method="POST" action="{{ route('participants.store') }}" class="space-y-4">
    @csrf

    <input type="text" name="name" placeholder="Name"
           class="w-full p-3 border rounded">

    <input type="email" name="email" placeholder="Email"
           class="w-full p-3 border rounded">

    <input type="text" name="phone" placeholder="Phone Number"
           class="w-full p-3 border rounded">

    <button class="bg-blue-600 text-white px-4 py-2 rounded">Save</button>
</form>
@endsection
