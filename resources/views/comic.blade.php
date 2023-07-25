@extends('layouts.app')

@section('content')
    <div class="jumbotron-thumbnail">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="content-image position-relative">
                        <div class="img-container-comics position-relative">
                            <img class="comic-ratio" src="{{ $comic_id->thumb }}" alt="{{ $comic_id->title }}">
                            <span class="position-absolute top-0 start-0 text-uppercase thumb-background p-1">comic
                                book</span>
                            <span
                                class=" text-uppercase thumb-background position-absolute bottom-0 start-50 translate-middle-x w-100 text-center">view
                                gallery</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Description of comic --}}
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h4 class="card-text-color fw-bolder">{{ $comic_id->title }}</h4>
                <div class="border border-end-0">
                    <div class=" fw-bolder  aviability py-2 px-4 d-flex justify-content-between">
                        <div class="nested-span">
                            <span class="text-green">U.S Price:</span> <span
                                class="text-white">{{ $comic_id->price }}</span>
                        </div>
                        <div class="text-uppercase text-green">available</div>
                        <div class="aviability text-white ">Check Aviability</div>
                    </div>
                </div>
                <div class="description mt-3">
                    <p>{{ $comic_id->description }}</p>
                </div>
            </div>
        </div>
    </div>
    {{-- Writers of comics --}}
    <hr>
    <div class="jumbotron-comic">
        <div class="container">
            <div class="row mb-5">
                <div class="col-6">
                    <table class="table table-striped">
                        {{-- TALENT PART --}}
                        <thead>
                            <tr>
                                <th><span class="card-text-color fs-5">Talent</span></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th><span class="card-text-color fs-6">Art by:</span></th>
                                <td><span class="artist-text-color fw-semibold">{{ $comic_id->artists }}</span>
                                </td>
                            </tr>
                            <tr>
                                <th><span class="card-text-color fs-6">Art by:</span></th>
                                <td><span class="artist-text-color fw-semibold">{{ $comic_id->writers }}</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-6">
                    <table class="table table-striped">
                        {{-- SPECS PART --}}
                        <thead>
                            <tr>
                                <th><span class="card-text-color fs-5">Specs</span></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th><span class="card-text-color fs-6">Series:</span></th>
                                <td>
                                    <h6 class="artist-text-color fw-semibold">{{ $comic_id->series }}</h6>
                                </td>
                            </tr>
                            <tr>
                                <th><span class="card-text-color fs-6">U.S. Price:</span></th>
                                <td><span class="black-text">{{ $comic_id->price }}</span></td>
                            </tr>
                            <tr>
                                <th><span class="card-text-color fs-6">On Sale Date:</span></th>
                                <td><span class="black-text">{{ $comic_id->sale_date }}</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
