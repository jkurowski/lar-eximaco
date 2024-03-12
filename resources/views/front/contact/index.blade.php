@extends('layouts.page', ['body_class' => 'contact-page'])

@section('meta_title', $page->title)
@section('seo_title', $page->meta_title)
@section('seo_description', $page->meta_description)

@section('content')
    <main class="position-relative">
        <section class="breadcrumb-page">
            <div class="container">
                <nav style="--bs-breadcrumb-divider: '/';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Strona główna</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kontakt</li>
                    </ol>
                </nav>
            </div>
        </section>
        <section class="first-sec cta cta-form sec-pad">
            @include('front.contact.form', ['page_name' => 'Kontakt'])
        </section>

        <section class="contact text-center text-sm-start sec-pad radial-bg-2">
            <div class="container inline inline-tc">
                <div class="row">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div class="section-header mb-3">
                            <p class="section-header__subtitle" data-aos="fade-up" data-aos-duration="700" data-modaltytul="1">{!! getInline($array, 1, 'modaltytul') !!}</p>
                            <h2 class="section-header__title" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300" data-modaleditor="1">{!! getInline($array, 1, 'modaleditor') !!}</h2>
                        </div>
                        <div class="mb-5 inner-html" data-modaleditortext="1">
                            {!! getInline($array, 1, 'modaleditortext') !!}
                        </div>
                        <a href="" class="project-btn project-btn--gray">Sprawdź</a>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div id="map"></div>
                    </div>
                </div>
                @auth
                    <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="1" data-hideinput="modallink,modallinkbutton,file,file_alt" data-method="update" data-imgwidth="570" data-imgheight="380"></button></div>
                @endauth
            </div>
        </section>
    </main>
@endsection
@push('scripts')
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
    </script>
@endpush
