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
        <footer>
            <!-- FIRST FOOTER -->
            <div class="jumbotron-footer">
                <div class="container">
                    <div class="row dc-background pt-5">
                        <div class="col d-flex flex-row">
                            <div class="footer-one me-5">
                                <!-- DC COMICS -->
                                <h2 class="text-uppercase text-white">dc comics</h2>
                                <ul class="list-unstyled">
                                    @foreach ($objs as $obj)
                                        <li>
                                            <a class="linkz" href="#">{{ $obj['label'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                                <!-- SHOP -->
                                <h2 class="text-uppercase text-white">shop</h2>
                                <ul class="list-unstyled">
                                    @foreach ($mini_lists as $obj)
                                        <li>
                                            <a class="linkz" href="#">{{ $obj['label'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="footer-two me-5">
                                <!-- DC -->
                                <h2 class="text-uppercase text-white">dc</h2>
                                <ul class="list-unstyled">
                                    @foreach ($dc_s as $obj)
                                        <li>
                                            <a class="linkz" href="#">{{ $obj['label'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="footer-three">
                                <!-- SITES -->
                                <h2 class="text-uppercase text-white">sites</h2>
                                <ul class="list-unstyled">
                                    @foreach ($sites as $obj)
                                        <li>
                                            <a class="linkz" href="#">{{ $obj['label'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <span>All Sites Content TM and &copy; 2020 DC Entertainment, unless otherwise <a
                                href="#">noted here</a>. All rightes reserved.</span>
                        <a href="#">Coockies Settings</a>
                    </div>
                </div>
            </div>
            <!-- SECOND FOOTER -->
            <div class="jumbotron-social">
                <div class="container">
                    <div class="row d-flex space-between">
                        <div class="col-6">
                            <button class="text-uppercase btn border-primary rounded-0 text-white px-3 py-2">sign-up
                                now!</button>
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <h2 class="text-uppercase follow me-4">follow us</h2>
                            <ul class="d-flex list-unstyled">
                                @foreach ($imgs as $obj)
                                    <li class="me-4">
                                        <div class="img-container-social">
                                            <a href="{{ $obj['link'] }}" class="linkz"><img
                                                    src="{{ Vite::asset($obj['src']) }}" alt="{{ $obj['lable'] }}"></a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>
</body>

</html>
