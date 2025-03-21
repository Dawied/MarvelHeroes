@extends('layouts.app')

@section('content')
    <div class="form-header">
        <h1>Edit Ability - {{ $ability->name }}</h1>
    </div>

    <form action="{{ route('abilities.update', $ability->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $ability->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Save</button>
    </form>
@endsection
