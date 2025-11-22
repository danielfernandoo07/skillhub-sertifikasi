<?php

use App\Models\Participant;
use function Pest\Laravel\{get, post, put, delete};

test('participant index page is accessible', function () {
    get(route('participants.index'))
        ->assertStatus(200)
        ->assertSee('Participants List');
});

test('participant create page is accessible', function () {
    get(route('participants.create'))
        ->assertStatus(200)
        ->assertSee('Add New Participant');
});

test('a participant can be created', function () {
    $data = [
        'name' => 'Daniel',
        'email' => 'daniel@example.com',
        'phone' => '08123',
    ];

    post(route('participants.store'), $data)
        ->assertRedirect(route('participants.index'));

    $this->assertDatabaseHas('participants', [
        'email' => 'daniel@example.com',
    ]);
});

test('participant detail page can be viewed', function () {
    $participant = Participant::factory()->create();

    get(route('participants.show', $participant->id))
        ->assertStatus(200)
        ->assertSee($participant->name)
        ->assertSee($participant->email);
});

test('a participant can be updated', function () {
    $participant = Participant::factory()->create();

    $updated = [
        'name' => 'Updated Name',
        'email' => 'updated@example.com',
        'phone' => '08999',
    ];

    put(route('participants.update', $participant->id), $updated)
        ->assertRedirect(route('participants.index'));

    $this->assertDatabaseHas('participants', [
        'email' => 'updated@example.com',
    ]);
});

test('a participant can be deleted', function () {
    $participant = Participant::factory()->create();

    delete(route('participants.destroy', $participant->id))
        ->assertRedirect(route('participants.index'));

    $this->assertDatabaseMissing('participants', [
        'id' => $participant->id,
    ]);
});

