<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main>
        <header>
            <div class="header-f">
                <div class="container">
                    <div class="row">
                        <div class="col d-flex align-items-star justify-content-end">
                            <ul class="d-flex list-unstyled fw-bolder me-5 text-uppercase ">
                                <li class="me-5"><a href="/" class="text-white">dc power&#8480;visa&#174;</a>
                                </li>
                                <li><a href="/" class="text-white"> additional dc sites</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-2">
                        <div class="img-container">
                            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Dc Logo">
                        </div>
                    </div>
                    <div class="col-10 header-s">
                        <ul class="d-flex align-items-center text-uppercase list-unstyled">
                            <li class="padding-hr header-li">
                                <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">characters</a>
                            </li>
                            <li class="padding-hr header-li">
                                <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">comics</a>
                            </li>
                            <li class="padding-hr header-li">
                                <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">movie</a>
                            </li>
                            <li class="padding-hr header-li">
                                <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">tv</a>
                            </li>
                            <li class="padding-hr header-li">
                                <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">games</a>
                            </li>
                            <li class="padding-hr header-li">
                                <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">collectebles</a>
                            </li>
                            <li class="padding-hr header-li">
                                <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">videos</a>
                            </li>
                            <li class="padding-hr header-li">
                                <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">fans</a>
                            </li>
                            <li class="padding-hr header-li">
                                <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">news</a>
                            </li>
                            <li class="padding-hr header-li">
                                <a href="{{ route('home') }}" class="list-group-item fw-bolder mx-3">shop</a>
                            </li>
                            <li class="padding-hr header-li">
                                <div class="search d-flex s-control">
                                    <input type="text" class="form-control s-bar" placeholder="">
                                    <i class="fa fa-search align-self-center"></i>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="jumbotron">

            </div>
        </header>
    </main>
</body>

</html>
