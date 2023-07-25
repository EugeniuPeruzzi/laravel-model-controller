@extends('layouts.app')

@section('content')
    @foreach ($comics as $id => $comic)
        <img src="{{ $comic->thumb }}" alt="">
        {{ $comic->title }}
        {{ $comic->description }}
    @endforeach
@endsection
