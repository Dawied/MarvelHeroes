@extends('layouts.app')

@section('content')
    <div class="text-center mt-4">
        <h1>Marvel Heroes-Abilities</h1>
        <h3>Koppeltabellen in Laravel</h3>
        <img class="banner" style="width: 60%;" src="{{ asset('marvelheroes.png') }}" alt="banner"/>
    </div>
    <div class="d-flex gap-2">
        <div class="info-box col-4">
            Een complete tutorial om snel en met weinig
            code koppeltabellen in Laravel te gebruiken.
        </div>
        <div class="info-box col-4">
            <ul>
                <li>Wat is een koppeltabel?</li>
                <li>Hoe werkt Many-to-many?</li>
            </ul>
        </div>
        <div class="info-box col-4">
            <ul>
                <li>Hoe werkt attach() in de store()</li>
                <li>Hoe werkt sync() in de update()</li>
            </ul>
        </div>
    </div>
@endsection
