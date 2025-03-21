@extends('layouts.app')

@section('content')
    <div class="form-header">
      <h1>Heroes</h1>
      <a href="{{ route('heroes.create') }}" class="btn btn-outline-secondary">New Hero</a>
    </div>
    <table class="table table-sm">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($heroes as $hero)
                <tr>
                    <td>{{ $hero->name }}</td>
                    <td>
                        <a href="{{ route('heroes.edit', $hero->id) }}" class="btn btn-link">Edit</a>
                        <form action="{{ route('heroes.destroy', $hero->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection