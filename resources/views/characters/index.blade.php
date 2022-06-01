@extends('layouts.layout')

@section('content')
<h1 class="text-primary text-center">Rick and morty</h1>

{{-- pop up --}}
@include('includes.message')

<a href=" {{ route( 'characters.create' ) }} " class="btn btn-success">Crea personaggio</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">image</th>
            <th scope="col">name</th>
            <th scope="col">status</th>
            <th scope="col">species</th>
            <th scope="col">type</th>
            <th scope="col">gender</th>
            <th scope="col">origin</th>
            <th scope="col">actions</th>
        </tr>
    </thead>
    <tbody>

        @forelse ( $characters as $character )
        <tr>
            <td>
                <img src="{{ $character->image }}" alt="" width="50px">
            </td>
            <td>
                {{ $character->name }}
            </td>
            <td>
                {{ $character->status }}
            </td>
            <td>
                {{ $character->species }}
            </td>
            <td>
                {{ $character->type }}
            </td>
            <td>
                {{ $character->gender }}
            </td>
            <td>
                {{ $character->origin }}
            </td>
            <td class="">
                <a href=" {{ route( 'characters.show', $character->id ) }} " class="btn btn-primary">View</a>
                <a href=" {{ route( 'characters.edit', $character->id ) }} " class="btn btn-warning">Modifica</a>

                <form action="{{ route( 'characters.destroy', $character->id ) }}"
                    method="POST"
                    class="delete-form"
                    data-name="{{ $character->name }}"
                    >
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit">Elimina</button>
                </form>

            </td>
        </tr>
        @empty
        <h2>Il database è vuoto</h2>
        @endforelse
    </tbody>
</table>
@endsection

@section('delete-message')
    <script src=" {{ asset('js/deleteMessage.js') }} "></script>
@endsection
