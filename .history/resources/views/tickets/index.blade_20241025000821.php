<!-- resources/views/tickets/index.blade.php -->

@extends('layouts.app') <!-- Extend the master layout -->

@section('title', 'Tickets') <!-- Optionally set a title for this page -->

@section('content') <!-- Define the content section -->
    @livewire('tickets.index') <!-- Your Livewire component here -->
@endsection
