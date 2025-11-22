@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Course Detail</h1>

<div class="bg-white p-6 rounded shadow space-y-4">
    <p><strong>Name:</strong> {{ $course->name }}</p>
    <p><strong>Instructor:</strong> {{ $course->instructor }}</p>
    <p><strong>Description:</strong> {{ $course->description }}</p>

   
</div>

<h1 class="text-2xl font-bold mb-4 pt-6">Participants in this Course</h1>

<div class="bg-white p-6 rounded shadow space-y-4">
<ul class="space-y-2">
@forelse ($participants as $p)
    <li class="p-2 bg-gray-100 rounded">{{ $p->name }}</li>
@empty
    <p class="text-gray-500 italic">Belum ada peserta terdaftar di kelas ini.</p>
@endforelse
</ul>
</div>

 <a href="{{ route('courses.index') }}" class="text-blue-600 underline">Back</a>

@endsection
