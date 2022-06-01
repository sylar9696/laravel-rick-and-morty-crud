@extends('layouts.layout')

@section('content')
<div class="container text-center">
    {{-- pop up --}}
    @include('includes.message')

    {{-- <h1 class="text-primary text-center">{{ $character->name }}</h1> --}}
    {{!! $character->name !!}}
    <img src="{{ $character->image }}" alt="">
    <h3>Species: {{ $character->species }}</h3>
    <h3>Type: {{ $character->type }}</h3>
</div>


@endsection
