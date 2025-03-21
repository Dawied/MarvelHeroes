@extends('layouts.app')

@section('content')
    <div class="form-header">
      <h1>Abilities</h1>
      <a href="{{ route('abilities.create') }}" class="btn btn-outline-secondary">New Ability</a>
    </div>
    <table class="table table-sm">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($abilities as $ability)
                <tr>
                    <td>{{ $ability->name }}</td>
                    <td>
                        <a href="{{ route('abilities.edit', $ability->id) }}" class="btn btn-link">Edit</a>
                        <form action="{{ route('abilities.destroy', $ability->id) }}" method="POST" style="display:inline;">
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