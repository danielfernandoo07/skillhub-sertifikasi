<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Participant;

class ParticipantController extends Controller
{
    public function index()
    {
        $participants = Participant::all();
        return view('participants.index', compact('participants'));
    }

    public function create()
    {
        return view('participants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:participants,email',
            'phone' => 'nullable|string|max:50',
        ]);

        Participant::create($request->all());

        return redirect()
            ->route('participants.index')
            ->with('success', 'Participant created successfully.');
    }

    public function show(Participant $participant)
    {
        $courses = $participant->courses;
        return view('participants.show', compact('participant', 'courses'));
    }

    public function edit(Participant $participant)
    {
        return view('participants.edit', compact('participant'));
    }

    public function update(Request $request, Participant $participant)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|unique:participants,email,' . $participant->id,
            'phone' => 'nullable|string|max:50',
        ]);

        $participant->update($request->all());

        return redirect()
            ->route('participants.index')
            ->with('success', 'Participant updated successfully.');
    }

    public function destroy(Participant $participant)
    {
        $participant->delete();

        return redirect()
            ->route('participants.index')
            ->with('success', 'Participant deleted successfully.');
    }
}
