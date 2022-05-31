@extends('layouts.layout')

@section('content')
<div class="container text-center">
    <h1 class="text-primary text-center">Creare nuovo personaggio</h1>


    <form action="{{ route( 'characters.store' ) }}" method="POST">

        @csrf

        <div class="row">
            <div class="col-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" class="form-control" name="name" required>
                <div class="form-text">
                    Qui devi specificare il nome del personaggio
                </div>
            </div>
            <div class="col-6">
                <label for="status" class="form-label">status</label>
                <input type="text" id="status" class="form-control"
                    name="status" required>
                <div class="form-text">
                    Qui devi specificare lo status del personaggio
                </div>
            </div>
            <div class="col-6">
                <label for="status" class="form-label">status</label>
                <input type="text" id="status" class="form-control"
                    name="status" required>
                <div class="form-text">
                    Qui devi specificare lo status del personaggio
                </div>
            </div>
            <div class="col-6">
                <select class="form-select" aria-label="Default select example" name="species" required>
                    <option selected value="Human">Human</option>
                    <option value="Alien">Alien</option>
                </select>
            </div>
            <div class="col-6">
                <label for="type" class="form-label">type</label>
                <input type="text" id="type" class="form-control"
                    name="type" required>
                <div class="form-text">
                    Qui devi specificare il type del personaggio
                </div>
            </div>
            <div class="col-6">
                <label for="gender" class="form-label">Gender</label>
                <input type="text" id="gender" class="form-control"
                    name="gender" required>
                <div class="form-text">
                    Qui devi specificare il gender del personaggio
                </div>
            </div>
            <div class="col-6">
                <label for="origin" class="form-label">Origin</label>
                <input type="text" id="origin" class="form-control"
                    name="origin" required>
                <div class="form-text">
                    Qui devi specificare il gender del personaggio
                </div>
            </div>
            <div class="col-6">
                <label for="image" class="form-label">image</label>
                <input type="text" id="image" class="form-control"
                    name="image" required>
                <div class="form-text">
                    Qui devi specificare il gender del personaggio
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Invia dati</button>

    </form>


</div>
@endsection
