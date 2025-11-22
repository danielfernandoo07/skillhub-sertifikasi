@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Add New Course</h1>

<form action="{{ route('courses.store') }}" method="POST" class="space-y-4 bg-white p-6 rounded shadow">
    @csrf

    <div>
        <label class="block font-semibold">Name</label>
        <input type="text" name="name" class="w-full border rounded p-2" required>
    </div>

    <div>
        <label class="block font-semibold">Instructor</label>
        <input type="text" name="instructor" class="w-full border rounded p-2" required>
    </div>

    <div>
        <label class="block font-semibold">Description</label>
        <textarea name="description" class="w-full border rounded p-2"></textarea>
    </div>

    <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
        Save
    </button>
</form>
@endsection
