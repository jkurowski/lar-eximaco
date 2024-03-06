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
            @include('front.contact.form', [ 'page_name' => 'Kontakt'])
        </section>
        <section class="contact text-center text-sm-start sec-pad radial-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div class="section-header mb-3">
                            <p class="section-header__subtitle" data-aos="fade-up" data-aos-duration="700">Inwestycje Nadarzyn</p>
                            <h2 class="section-header__title" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Gdzie nas znajdziesz?</h2>
                        </div>
                        <div class="mb-5 inner-html">
                            <p><strong>Firma Eximaco działa na rynku usług budowlanych od 35 lat. Dzięki współpracy z doświadczonymi architektami, dostawcami materiałów budowlanych oraz wieloma innymi specjalistami, zapewnia wysoki standard usług i poczucie bezpieczeństwa swoim klientom.</strong></p>
                            <p>Kompleksowa obsługa i profesjonalne doradztwo, to również istotne elementy codziennej działalności firmy, która z każdą inwestycją umacnia swój wizerunek rzetelnego inwestora.</p>
                            <p>Jesteśmy otwarci <br> Pon - Sob: 9:00 - 18:00</p>
                        </div>
                        <a href="" class="project-btn project-btn--gray">Sprawdź</a>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
