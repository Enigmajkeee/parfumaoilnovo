<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ParfumaOilNovo</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/aos/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/js/loader.js')}}"></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html"><img src="{{ asset('assets/images/logo.jpg') }}" height="250" width="250" alt="Edica"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Главная <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">О нас</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Каталог</a>
                        <div class="dropdown-menu" aria-labelledby="blogDropdown">
                            <a class="dropdown-item" href="http://localhost:92/api/oils">Парфюмерные масла</a>
                            <a class="dropdown-item" href="http://localhost:92/api/accessories">Аксессуары</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Контакты</a>
                    </li>
                </ul>
                <ul class="navbar-nav mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="flag-icon flag-icon-squared rounded-circle flag-icon-gb"></span> Eng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Download</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

@yield('content')

<section class="edica-footer-banner-section">
    <div class="container">
        <div class="footer-banner" data-aos="fade-up">
            <h1 class="banner-title">Download it now.</h1>
            <div class="banner-btns-wrapper">
                <button class="btn btn-success"> <img src="{{ asset('assets/images/apple@1x.svg') }}" alt="ios" class="mr-2"> App Store</button>
                <button class="btn btn-success"> <img src="{{ asset('assets/images/android@1x.svg') }}" alt="android" class="mr-2"> Google Play</button>
            </div>
            <p class="banner-text">Add some helper text here to explain the finer details of your <br> product or service.</p>
        </div>
    </div>
</section>
<footer class="edica-footer" data-aos="fade-up">
    <div class="container">
        <div class="row footer-widget-area">
            <div class="col-md-3">
                <p class="contact-details">olka050387@gmail.com</p>
                <p class="contact-details">+375 29 103 60 08 - Viber, Telegram, Whatsapp</p>
            </div>
        </div>
        <div class="footer-bottom-content">
            <p class="mb-0">© Enigmajkee. 2024. All rights reserved.</p>
        </div>
    </div>
</footer>
<script src="{{ asset('assets/vendors/popper.js/popper.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/vendors/aos/aos.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>

</html>
