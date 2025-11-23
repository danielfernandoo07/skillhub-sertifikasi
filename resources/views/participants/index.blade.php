@extends('layouts.app')

@section('content')

<div class= "flex justify-between mb-4">
    <h1 class="text-2xl font-bold">Participants List</h1>
    <a href="{{ route('participants.create') }}" 
   class="bg-blue-700 text-white px-4 py-2 rounded mb-4 inline-block">
   + Add Participant
</a>
</div>

<table class="min-w-full bg-white shadow rounded">
    <thead>
        <tr class="bg-gray-200 text-left">
            <th class="p-3 text-left">Name</th>
            <th class="p-3 text-left">Email</th>
            <th class="p-3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($participants as $p)
        <tr class="border-b">
            <td class="p-3">{{ $p->name }}</td>
            <td class="p-3">{{ $p->email }}</td>
            <td class="p-3 space-x-2">
                <a href="{{ route('participants.show', $p->id) }}" class="text-blue-500">View</a>
                <a href="{{ route('participants.edit', $p->id) }}" class="text-yellow-500">Edit</a>
                <form action="{{ route('participants.destroy', $p->id) }}" method="POST" class="inline">
                    @csrf @method('DELETE')
                    <button class="text-red-600" onclick="return confirm('Delete this participant?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
