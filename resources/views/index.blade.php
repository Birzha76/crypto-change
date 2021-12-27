<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>CryptoX - Надежный и быстрый обмен криптовалюты</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/main.css') }}">
    @livewireStyles
</head>

<body>

<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="top-header-content h-100 d-flex align-items-center justify-content-between">
                        <!-- Top Headline -->
                        <div class="top-headline">
                            <p>Добро пожаловать в <span>CryptoX</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="cryptos-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cryptosNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="img/core-img/logo3.png" width="150px" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

{{--                        <!-- Nav Start -->--}}
{{--                        <div class="classynav">--}}
{{--                            <ul>--}}
{{--                                <li><a href="index.html">Главная</a></li>--}}
{{--                                <li><a href="contact.html">Контакты</a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                        <!-- Nav End -->--}}
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->

@if (session()->has('success'))
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            </div>
        </div>
    </div>
@endif

@if ($errors->any())
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-12">
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif

@if (!$errors->any())

<!-- ##### About Area Start ##### -->
<section class="cryptos-about-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="about-thumbnail mb-100">
                    <img src="img/bg-img/about.png" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="about-content mb-100">
                    <div class="section-heading">
                        <h3>Надежный <br><span>обмен</span> криптовалюты</h3>
                        <h5>Сервис CryptoX предназначен для тех, кто хочет быстро и безопасно купить или продать такие виды криптовалют как Bitcoin (BTC), Tether (USDT), Etherium (ETH). Работаем со следующими банками и платёжными системами: Альфа-Банк, Тинькофф, Сбербанк, ВТБ 24.</h5>
                        <p>Сервис обмена криптовалют CryptoX использует современное программное обеспечение, позволяющее удобно осуществлять конвертационные операции с использованием разных устройств.</p>
                        <p class="mt-3">ВНИМАНИЕ! Цены являются рассчетными. Вы формируете заявку на интересующую вас сумму. Все заявки обрабатываются в ручном режиме операторами. Вы получаете сумму обмена уже с учетом комиссии сети (GAS) и комиссии обменного пункта.</p>
                        <p class="mt-3">ВАЖНО! Проверяйте правильность контактных данных: email и телефон!</p>
                        <p class="mt-3"><b>Как происходит обмен</b>:
                            <ol class="mt-3">
                                <li>1. Вы создаете заявку на покупку/продажу криптовалюты и указываете адрес кошелька, Имя, корректные номер телефона и емайл.</li>
                                <li>2. Оператор получает заявку и связывается с вами для подтверждения.</li>
                                <li>3. После подтверждения заявки вы получаете реквизиты для перевода.</li>
                                <li>4. После подтверждения перевода вы получаете обменную валюту.</li>
                            </ol>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Area End ##### -->

@endif

<!-- ##### Currency Area Start ##### -->
<section class="currency-calculator-area section-padding-100 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-2.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center white mx-auto">
                    <h3 class="mb-4">Заявка на обмен</h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-7">
                <livewire:exchange />
            </div>
        </div>
    </div>
</section>
<!-- ##### Currency Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="bottom-footer-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12">
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Все права защищены | Если у Вас возникли вопросы пишите нам <a href="mailto:info@cryptox-obmen.ru">info@cryptox-obmen.ru</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area Start ##### -->

@livewireScripts
</body>

</html>
