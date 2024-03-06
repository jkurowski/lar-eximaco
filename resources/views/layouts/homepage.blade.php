<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {!! settings()->get("scripts_head") !!}

    <title>{{ settings()->get("page_title") }}</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ settings()->get("page_description") }}">
    <meta name="robots" content="{{ settings()->get("page_robots") }}">
    <meta name="author" content="{{ settings()->get("page_author") }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}">

    <!-- Fonts -->
    <link rel="DNS-prefetch" href="//fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    @stack('style')
</head>
<body class="{{ !empty($body_class) ? $body_class : '' }}" data-lazy-background="{{ asset('images/kreski-tlo.png') }}" style="background-position: center -16rem, center 1900px; background-repeat: no-repeat;">
{!! settings()->get("scripts_afterbody") !!}

@include('layouts.partials.header')

@yield('content')

@include('layouts.partials.footer')

@include('layouts.partials.cookies')

<!-- Styles -->
<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('/css/slick.css') }}" rel="stylesheet">
<link href="{{ asset('/css/animations.css') }}" rel="stylesheet">
<link href="{{ asset('/css/leaflet.css') }}" rel="stylesheet">
<link href="{{ asset('/css/aos.css') }}" rel="stylesheet">

<!-- jQuery -->
<script src="{{ asset('/js/jquery.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/slick.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/bootstrap.bundle.min.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/leaflet.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/aos.js') }}" charset="utf-8"></script>
<script src="{{ asset('/js/main.js') }}" charset="utf-8"></script>

<script src="{{ asset('js/validation.js') }}" charset="utf-8"></script>
<script src="{{ asset('js/pl.js') }}" charset="utf-8"></script>

@if(settings()->get("popup_status") == 1)
    <div class="modal" tabindex="-1" id="popModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    {!! settings()->get("popup_text") !!}
                </div>
            </div>
        </div>
    </div>
@endif
<script type="text/javascript">
    const map = L.map('map').setView([52.124160, 20.668000], 14);
    L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>',
        subdomains: 'abcd',
        maxZoom: 20
    }).addTo(map);

    L.marker([52.124160, 20.668000]).addTo(map)
        .bindPopup('<img src="{{ asset('images/logo-dark.svg') }}" width="73" height="27" alt="logo" class="mb-2"> <br> Przeskok 6 <br> 05-822 Milanówek')
        .openPopup();

    $(window).on("scroll", function () {
        AOS.init({
            disable: function() {
                const maxWidth = 1200;
                return window.innerWidth < maxWidth;
            }
        });
    });

    $(document).ready(function(){

        $(".validateForm").validationEngine({
            validateNonVisibleFields: true,
            updatePromptsPosition:true,
            promptPosition : "topRight:-137px"
        });

        @if(settings()->get("popup_status") == 1)
            const popModal = new bootstrap.Modal(document.getElementById('popModal'), {
                keyboard: false
            });
        @endif
        @if($popup == 1)
        popModal.show();
            setTimeout( function(){
                popModal.hide();
            }, {{ settings()->get("popup_timeout") }} );
        @endif
    });

    @if(session('success') || session('warning') || $errors->any())
    $(window).load(function() {
        const aboveHeight = $('header').outerHeight();
        $('html, body').stop().animate({
            scrollTop: $('.validateForm').offset().top-aboveHeight
        }, 1500, 'easeInOutExpo');
    });
    @endif
</script>
{!! settings()->get("scripts_beforebody") !!}
</body>
</html>
