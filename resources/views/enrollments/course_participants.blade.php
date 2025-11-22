@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Participants in {{ $course->name }}</h1>

<ul class="space-y-2">
    @forelse ($participants as $p)
        <li class="p-3 bg-white shadow rounded">{{ $p->name }}</li>
    @empty
        <p>No participants.</p>
    @endforelse
</ul>
@endsection
