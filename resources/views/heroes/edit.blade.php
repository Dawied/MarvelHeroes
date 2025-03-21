@extends('layouts.app')

@section('content')
    <div class="form-header">
        <h1>Edit Hero - {{ $hero->name }}</h1>
    </div>
    <form action="{{ route('heroes.update', $hero->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $hero->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary mt-4">Save</button>
    </form>
@endsection
