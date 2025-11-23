<!-- @extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Participant</h1>

<div class="bg-white p-4 shadow rounded">
    <p><strong>Name:</strong> {{ $participant->name }}</p>
    <p><strong>Email:</strong> {{ $participant->email }}</p>
    <p><strong>Phone:</strong> {{ $participant->phone }}</p>
</div>

<h2 class="text-xl font-bold mt-6 mb-2">Enrolled Courses</h2>
<div class="bg-white p-4 shadow rounded">
    @if ($courses->isEmpty())
        <p class="text-gray-500 italic">This participant is not enrolled in any course.</p>
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

<a href="{{ route('participants.index') }}" class="mt-4 inline-block text-blue-600">← Back</a>
@endsection -->
