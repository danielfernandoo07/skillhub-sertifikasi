@extends('layouts.app')

@section('content')
<div class="flex justify-between mb-4">
    <h1 class="text-2xl font-bold">Courses</h1>
    <a href="{{ route('courses.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Add Course</a>
</div>

<table class="w-full bg-white rounded shadow">
    <thead>
        <tr class="bg-gray-200 text-left">
            <th class="p-3">Name</th>
            <th class="p-3">Instructor</th>
            <th class="p-3">Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($courses as $course)
            <tr class="border-t">
                <td class="p-3">{{ $course->name }}</td>
                <td class="p-3">{{ $course->instructor }}</td>
                <td class="p-3 space-x-2">
                    <a href="{{ route('courses.show', $course->id) }}" class="text-blue-600">View</a>
                    <a href="{{ route('courses.edit', $course->id) }}" class="text-yellow-600">Edit</a>
                    <form action="{{ route('courses.destroy', $course->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button class="text-red-600" onclick="return confirm('Delete this course?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
