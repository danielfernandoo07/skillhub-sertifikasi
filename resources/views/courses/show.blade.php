@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Course Detail</h1>

<div class="bg-white p-6 rounded shadow space-y-4">
    <p><strong>Name:</strong> {{ $course->name }}</p>
    <p><strong>Instructor:</strong> {{ $course->instructor }}</p>
    <p><strong>Description:</strong> {{ $course->description }}</p>

    <a href="{{ route('courses.index') }}" class="text-blue-600 underline">Back</a>
</div>

<div>
<h3>Peserta dalam kelas ini</h3>
<ul>
    @foreach ($participants as $p)
        <li>{{ $p->name }}</li>
    @endforeach
</ul>
</div>


@endsection
