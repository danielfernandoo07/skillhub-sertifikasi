@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Enroll Participant to Course</h1>

@if (session('success'))
    <div class="bg-green-100 p-3 rounded mb-4 text-green-800">
        {{ session('success') }}
    </div>
@endif

<form method="POST" action="{{ route('enrollments.store') }}" class="space-y-4 max-w-lg">
    @csrf

    <div>
        <label class="block mb-1 font-semibold">Participant</label>
        <select name="participant_id" class="w-full p-2 border rounded">
            @foreach($participants as $p)
                <option value="{{ $p->id }}">{{ $p->name }}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label class="block mb-1 font-semibold">Course</label>
        <select name="course_id" class="w-full p-2 border rounded">
            @foreach($courses as $c)
                <option value="{{ $c->id }}">{{ $c->name }}</option>
            @endforeach
        </select>
    </div>

    <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
        Enroll
    </button>
</form>
@endsection
