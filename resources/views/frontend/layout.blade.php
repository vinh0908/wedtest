<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/base.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/js/main.js') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/fontawesome-free-6.4.0-web/fontawesome-free-6.4.0-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/bootstrap-5.1.3-dist/icons-1.8.1/font/bootstrap-icons.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
    <div class="app">

        @include('frontend.header')

        <div class="header__img">
            <img class="header__img-big" src="{{ asset('images/img/bigimg.png') }}" alt="anhlon">
            <img class="header__img-big--imgimg" src="{{ asset('images/img/anhlonganh.jpeg') }}" alt="anhlonganh" width="400px">
            <div class="header__img-text">CUỘC SỐNG TIỆN NGHI</div>
            <div class="header__img-text--1">Discussion</div>
            <div class="header__img-input">
                <input class="header__img-search" type="text">
                <button class="header__img-search--btn">
                    <i class="bi bi-search header__img-search--icon"></i>
                </button>
            </div>
        </div>

        <div class="grid__column-10">
            <div class="home__image-small">
                <div class="home__image-small--little">
                    <a class="home__image-small--link" href="#"><img src="{{ asset('images/img/bigsmall.jpeg') }}" alt="anhnho" class="home__image-small--img"></a>
                    <div class="home__image-small--text">house applicance</div>
                </div>
                <div class="home__image-small--little">
                    <a class="home__image-small--link" href="#"><img src="{{ asset('images/img/bigsmall.jpeg') }}" alt="anhnho" class="home__image-small--img"></a>
                    <div class="home__image-small--text">house applicance</div>
                </div>
                <div class="home__image-small--little">
                    <a class="home__image-small--link" href="#"><img src="{{ asset('images/img/bigsmall.jpeg') }}" alt="anhnho" class="home__image-small--img"></a>
                    <div class="home__image-small--text">house applicance</div>
                </div>
                <div class="home__image-small--little">
                    <a class="home__image-small--link" href="#"><img src="{{ asset('images/img/bigsmall.jpeg') }}" alt="anhnho" class="home__image-small--img"></a>
                    <div class="home__image-small--text">house applicance</div>
                </div>
                <div class="home__image-small--little">
                    <a class="home__image-small--link" href="#"><img src="{{ asset('images/img/bigsmall.jpeg') }}" alt="anhnho" class="home__image-small--img"></a>
                    <div class="home__image-small--text">house applicance</div>
                </div>
            </div>
            <div class="home__image-small--controller">
                <a href="#" class="home__image-small--prev-link"><i class="home__image-small--controller-icon bi bi-chevron-left"></i></a>
                <a href="#" class="home__image-small--next-link"><i class="home__image-small--controller-icon bi bi-chevron-right"></i></a>
            </div>
        </div>

        <div class="grid__column-11">
            <div class="grid__column-11-4">
                <div class="home__content">
                    <div class="home__content-text">Feature : House Aplliance</div>
                    <div class="home__content-button">
                        <button class="home__content-button--size" type="button"> <a class="home__content-button--size-link"
                                href="#">Post</a></button>
                    </div>
                </div>
                <section class="home__image-big">
                    <div class="grid__row">
                        <div class="grid__column-2-4">
                            <a href="#" class="home__image-small--link"><img class="home__image-small-font" src="{{ asset('images/img/anhlon.jpeg') }}" alt="anhlon1"></a>
                        </div>
                        <div class="grid__column-2-4">
                            <a href="#" class="home__image-small--link"><img class="home__image-small-font" src="{{ asset('images/img/anhlon.jpeg') }}" alt="anhlon1"></a>
                        </div>
                        <div class="grid__column-2-4">
                            <a href="#" class="home__image-small--link"><img class="home__image-small-font" src="{{ asset('images/img/anhlon.jpeg') }}" alt="anhlon1"></a>
                        </div>
                        <div class="grid__column-2-4">
                            <a href="#" class="home__image-small--link"><img class="home__image-small-font" src="{{ asset('images/img/anhlon.jpeg') }}" alt="anhlon1"></a>
                        </div>
                    </div>
                </section>
                <div class="home__content-controller">
                    <a href="#" class="home__content-prev--link"><i class="home__content-controller--icon bi bi-chevron-left"></i></a>
                    <a href="" class="home__content-next--link"><i class="home__content-controller--icon bi bi-chevron-right"></i></a>
                </div>
            </div>
        </div>

        <div class="grid__column-11">
            <div class="grid__column-11-8">
                <div class="home__content">
                    <div class="home__content-text">Feature : House Aplliance</div>
                    <div class="home__content-button">
                        <button class="home__content-button--size" type="button"> <a class="home__content-button--size-link"
                                href="#">Post</a></button>
                    </div>
                </div>
                <section class="home__image-big">
                    <div class="grid__row">
                        <div class="grid__column-2-4">
                            <a href="" class="home__image-small--link"><img class="home__image-small-font" src="{{ asset('images/img/anhlon.jpeg') }}" alt="anhlon1"></a>
                        </div>
                        <div class="grid__column-2-4">
                            <a href="" class="home__image-small--link"><img class="home__image-small-font" src="{{ asset('images/img/anhlon.jpeg') }}" alt="anhlon1"></a>
                        </div>
                        <div class="grid__column-2-4">
                            <a href="" class="home__image-small--link"><img class="home__image-small-font" src="{{ asset('images/img/anhlon.jpeg') }}" alt="anhlon1"></a>
                        </div>
                        <div class="grid__column-2-4">
                            <a href="" class="home__image-small--link"><img class="home__image-small-font" src="{{ asset('images/img/anhlon.jpeg') }}" alt="anhlon1"></a>
                        </div>
                    </div>
                </section>

                <section class="home__image-big" style="margin-top: 5px;">
                    <div class="grid__row">
                        <div class="grid__column-2-4">
                            <a href="" class="home__image-small--link"><img class="home__image-small-font" src="{{ asset('images/img/anhlon.jpeg') }}" alt="anhlon1"></a>
                        </div>
                        <div class="grid__column-2-4">
                            <a href="" class="home__image-small--link"><img class="home__image-small-font" src="{{ asset('images/img/anhlon.jpeg') }}" alt="anhlon1"></a>
                        </div>
                        <div class="grid__column-2-4">
                            <a href="" class="home__image-small--link"><img class="home__image-small-font" src="{{ asset('images/img/anhlon.jpeg') }}" alt="anhlon1"></a>
                        </div>
                        <div class="grid__column-2-4">
                            <a href="" class="home__image-small--link"><img class="home__image-small-font" src="{{ asset('images/img/anhlon.jpeg') }}" alt="anhlon1"></a>
                        </div>
                    </div>
                </section>
                <div class="home__content-controller-1">
                    <a href="#" class="home__content-prev--link"><i class="home__content-controller--icon bi bi-chevron-left"></i></a>
                    <a href="" class="home__content-next--link"><i class="home__content-controller--icon bi bi-chevron-right"></i></a>
                </div>
            </div>
        </div>

        <div class="home__panigation">
            <div class="home__panigation--text">All discussion</div>
            <ul class="home__panigation--list">
                <li class="home__panigation--item">
                    <a href="#" class="home__panigation--link">1</a>
                </li>
                <li class="home__panigation--item">
                    <a href="#" class="home__panigation--link">2</a>
                </li>
                <li class="home__panigation--item">
                    <a href="#" class="home__panigation--link">3</a>
                </li>
                <li class="home__panigation--item">
                    <a href="#" class="home__panigation--link">4</a>
                </li>
                <li class="home__panigation--item">
                    <a href="#" class="home__panigation--link">5</a>
                </li>
                <li class="home__panigation--item">
                    <a href="#" class="home__panigation--link">6</a>
                </li>
                <li class="home__panigation--item">
                    <a href="#" class="home__panigation--link">7</a>
                </li>
                <li class="home__panigation--item">
                    <a href="#" class="home__panigation--link">8</a>
                </li>
                <li class="home__panigation--item">
                    <a href="#" class="home__panigation--link">9</a>
                </li>
                <li class="home__panigation--item">
                    <a href="#" class="home__panigation--link">10</a>
                </li>
            </ul>
        </div>

        <div class="grid__full-width">
            <section class="home__news">
                <div class="home__news-header--information">
                    Topic
                </div>
                <div class="home__news-header--list">
                    <div class="home__news-header--item">
                        Publish time
                    </div>
                    <div class="home__news-header--item">
                        Last reply time
                    </div>
                    <div class="home__news-header--item">
                        Reply counts
                    </div>
                </div>
            </section>
            <div>
                <div class="home__news-all">
                    <div class="home__news-header--information-all">
                        Top Useful Tuya Samrt Devices To Have In Your Home 2023
                    </div>
                    <div class="home__news-header--list">
                        <div class="home__news-header--item-1">
                            28/08/2023
                        </div>
                        <div class="home__news-header--item-1">
                            28/08/2023
                        </div>
                        <div class="home__news-header--item-2">
                            1000
                        </div>
                    </div>
                </div>
                <div class="home__news-all">
                    <div class="home__news-header--information-all">
                        Top Useful Tuya Samrt Devices To Have In Your Home 2023
                    </div>
                    <div class="home__news-header--list">
                        <div class="home__news-header--item-1">
                            28/08/2023
                        </div>
                        <div class="home__news-header--item-1">
                            28/08/2023
                        </div>
                        <div class="home__news-header--item-2">
                            1000
                        </div>
                    </div>
                </div>
                <div class="home__news-all">
                    <div class="home__news-header--information-all">
                        Top Useful Tuya Samrt Devices To Have In Your Home 2023
                    </div>
                    <div class="home__news-header--list">
                        <div class="home__news-header--item-1">
                            28/08/2023
                        </div>
                        <div class="home__news-header--item-1">
                            28/08/2023
                        </div>
                        <div class="home__news-header--item-2">
                            1000
                        </div>
                    </div>
                </div>
                <div class="home__news-all">
                    <div class="home__news-header--information-all">
                        Top Useful Tuya Samrt Devices To Have In Your Home 2023
                    </div>
                    <div class="home__news-header--list">
                        <div class="home__news-header--item-1">
                            28/08/2023
                        </div>
                        <div class="home__news-header--item-1">
                            28/08/2023
                        </div>
                        <div class="home__news-header--item-2">
                            1000
                        </div>
                    </div>
                </div>
                <div class="home__news-all">
                    <div class="home__news-header--information-all">
                        Top Useful Tuya Samrt Devices To Have In Your Home 2023
                    </div>
                    <div class="home__news-header--list">
                        <div class="home__news-header--item-1">
                            28/08/2023
                        </div>
                        <div class="home__news-header--item-1">
                            28/08/2023
                        </div>
                        <div class="home__news-header--item-2">
                            1000
                        </div>
                    </div>
                </div>
                <div class="home__news-all">
                    <div class="home__news-header--information-all">
                        Top Useful Tuya Samrt Devices To Have In Your Home 2023
                    </div>
                    <div class="home__news-header--list">
                        <div class="home__news-header--item-1">
                            28/08/2023
                        </div>
                        <div class="home__news-header--item-1">
                            28/08/2023
                        </div>
                        <div class="home__news-header--item-2">
                            1000
                        </div>
                    </div>
                </div>
                <div class="home__news-all">
                    <div class="home__news-header--information-all">
                        Top Useful Tuya Samrt Devices To Have In Your Home 2023
                    </div>
                    <div class="home__news-header--list">
                        <div class="home__news-header--item-1">
                            28/08/2023
                        </div>
                        <div class="home__news-header--item-1">
                            28/08/2023
                        </div>
                        <div class="home__news-header--item-2">
                            1000
                        </div>
                    </div>
                </div>
                <div class="home__news-all">
                    <div class="home__news-header--information-all">
                        Top Useful Tuya Samrt Devices To Have In Your Home 2023
                    </div>
                    <div class="home__news-header--list">
                        <div class="home__news-header--item-1">
                            28/08/2023
                        </div>
                        <div class="home__news-header--item-1">
                            28/08/2023
                        </div>
                        <div class="home__news-header--item-2">
                            1000
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('frontend.footer')

    </div>
</body>

</html>
