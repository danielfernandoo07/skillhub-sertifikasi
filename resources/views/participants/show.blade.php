@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-4">Detail Peserta</h1>

<div class="bg-white p-4 shadow rounded">
    <p><strong>Nama:</strong> {{ $participant->name }}</p>
    <p><strong>Email:</strong> {{ $participant->email }}</p>
    <p><strong>Telepon:</strong> {{ $participant->phone }}</p>
</div>

<div>
<h3>Kelas yang Diikuti</h3>
<ul>
    @foreach ($courses as $course)
    <li>
        {{ $course->name }}

        <form action="{{ route('enrollments.destroy', $course->pivot->id) }}"
              method="POST"
              style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">
                Batal
            </button>
        </form>
    </li>
@endforeach

</ul>
</div>

<a href="{{ route('participants.index') }}" 
   class="mt-4 inline-block text-blue-600">← Kembali</a>
@endsection
