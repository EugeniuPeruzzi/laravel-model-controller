@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card p-3" style="width: 18rem;">
                    <img src="{{ $comic_id->thumb }}" alt="">
                    <div class="card-body h-100">
                        <h5 class="card-title">{{ $comic_id->title }}</h5>
                        <strong class="mb-2">Description: </strong>
                        <p class="card-text h-75 overflow-auto mb-4">{{ $comic_id->description }} </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Series: <strong>{{ $comic_id->series }}</strong></li>
                        <li class="list-group-item">Price: <strong>{{ $comic_id->price }}</strong></li>
                        <li class="list-group-item">Sale date: <strong>{{ $comic_id->sale_date }}</strong></li>
                        <li class="list-group-item">Artists: <strong>{{ $comic_id->artists }}</strong></li>
                        <li class="list-group-item">Writers: <strong>{{ $comic_id->writers }}</strong></li>
                    </ul>
                    <div class="card-body">
                        <a href="/" class="card-link">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
