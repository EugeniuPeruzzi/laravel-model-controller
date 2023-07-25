@extends('layouts.app')

@section('content')
    <!-- COMICS PART -->
    <div class="jumbotron-black">
        <div class="container position-relative">
            <div class="box-btn position-absolute ">
                <button class="btn btn-primary py-2 px-4 text-uppercase fw-bold fs-4 rounded-0 ">current
                    series</button>
            </div>
            <div class="row">
                <div class="col d-flex flex-wrap my-5">
                    @foreach ($comics as $id => $comic)
                        <div class="card-content my-5">
                            <div class="img-container-2">
                                <a href="######"><img src="{{ $comic->thumb }}" alt=""></a>
                            </div>
                            <h6>{{ $comic->title }}</h6>
                        </div>
                    @endforeach
                </div>
                <div class="col-button w-100% d-flex justify-content-center my-4">
                    <button class="btn btn-primary text-uppercase py-2 px-5 rounded-0 fw-bolder">load more</button>
                </div>
            </div>
        </div>

    </div>
@endsection
