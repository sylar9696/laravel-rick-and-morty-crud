@extends('layouts.layout')

@section('content')
<div class="container text-center">
    <h1 class="text-primary text-center">Modificare il personaggio</h1>

    {{-- Errori Validazione --}}
    @if ( $errors->any() )
        {{-- Se sono presenti errori backend --}}
        <div class="alert alert-danger">
            <ul>
                @foreach ( $errors->all()  as $error)
                     <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route( 'characters.update', $character->id ) }}" method="POST" novalidate>
        @method('PUT')
        @csrf

        <div class="row">
            <div class="col-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" class="form-control" name="name" value=" {{ old('name', $character->name) }} " required>
                <div class="form-text">
                    Qui devi specificare il nome del personaggio
                </div>
            </div>
            <div class="col-6">
                <label for="status" class="form-label">status</label>
                <input type="text" id="status" class="form-control"
                    name="status" value=" {{ old('status',$character->status) }} " required>
                <div class="form-text">
                    Qui devi specificare lo status del personaggio
                </div>
            </div>
            <div class="col-6">
                <select class="form-select" aria-label="Default select example" name="species"  required>
                    <option @if ( old('species',$character->species) === 'Human' ) selected @endif>
                        Human
                    </option>
                    <option @if ( old('species',$character->species) === 'Alien' ) selected @endif>
                        Alien
                    </option>
                </select>
            </div>
            <div class="col-6">
                <label for="type" class="form-label">type</label>
                <input type="text" id="type" class="form-control"
                    name="type" value=" {{ old('type', $character->type) }} " required>
                <div class="form-text">
                    Qui devi specificare il type del personaggio
                </div>
            </div>
            <div class="col-6">
                <label for="gender" class="form-label">Gender</label>
                <input type="text" id="gender" class="form-control"
                    name="gender" value=" {{ old('gender', $character->gender) }} " required>
                <div class="form-text">
                    Qui devi specificare il gender del personaggio
                </div>
            </div>
            <div class="col-6">
                <label for="origin" class="form-label">Origin</label>
                <input type="text" id="origin" class="form-control"
                    name="origin" value=" {{ old('origin', $character->origin) }} " required>
                <div class="form-text">
                    Qui devi specificare il gender del personaggio
                </div>
            </div>
            <div class="col-6">
                <label for="image" class="form-label">image</label>
                <input type="text" id="image" class="form-control"
                    name="image" value=" {{ old('image', $character->image) }} " required>
                <div class="form-text">
                    Qui devi specificare il gender del personaggio
                </div>
            </div>
        </div>

        {{-- Nel caso ci sia una textarea --}}

        {{-- Lorem ipsum dolor sit, amet consectetur adipisicing elit. <br>Consequatur necessitatibus, culpa nam cupiditate temporibus, <br>expedita aliquam ex labore, accusamus repudiandae reiciendis distinctio sed non consectetur at. Magni fugiat sapiente tempore.

        {{!! $character->description !!}} --}}

        {{-- <textarea name="" id="" cols="30" rows="10">
            {{ $character->description }}
        </textarea> --}}

        <button type="submit" class="btn btn-primary">Invia dati</button>

    </form>


</div>
@endsection
