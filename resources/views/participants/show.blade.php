@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Participant</h1>

<div class="bg-white p-4 shadow rounded">
    <p><strong>Nama:</strong> {{ $participant->name }}</p>
    <p><strong>Email:</strong> {{ $participant->email }}</p>
    <p><strong>Telepon:</strong> {{ $participant->phone }}</p>
</div>
<h1 class="text-2xl font-bold mb-4 pt-6">Kelas yang Diikuti</h1>
<div class="bg-white p-4 shadow rounded">
  @if ($courses->isEmpty())
    <p class="text-gray-500 italic">Peserta ini belum terdaftar di kelas mana pun.</p>
@else
    <ul class="space-y-2">
        @foreach ($courses as $course)
            <li class="flex items-center justify-between bg-gray-100 p-3 rounded">
                <span>{{ $course->name }}</span>

                <form action="{{ route('enrollments.destroy', $course->pivot->id) }}"
                      method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">
                        Cancel
                    </button>
                </form>
            </li>
        @endforeach
    </ul>
@endif
</div>

<a href="{{ route('participants.index') }}" 
   class="mt-4 inline-block text-blue-600">← Back</a>
@endsection
