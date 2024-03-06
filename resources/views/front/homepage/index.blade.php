@extends('layouts.homepage', ['body_class' => 'homepage'])

@section('content')
    <main class="position-relative">
        <img src="{{ asset('images/zaufany-deweloper.svg') }}" alt="odznaka zaufany deweloper" class="zd-top" loading="eager">
        <section class="hero-slider radial-bg graph-bg">
            <div class="position-relative">
                <img src="{{ asset('images/ow.png') }}" class="hero-slider__img" width="1230" height="800" alt="osiedle" loading="eager">
                <img src="{{ asset('images/ow-tlo.png') }}" class="hero-slider__img-bg" width="667" height="800" alt="osiedle" loading="eager">
                <div  class="hero-slider__img-et">
                    <p class="hero-slider__img-et-title">Osiedle wygodne</p>
                    <p class="hero-slider__img-et-desc">98,53 m2 / 4 pokoje</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-xxl-6 hero-slider__text">
                            <h2 class="hero-slider__heading text-color">Osiedle Wygodne</h2>
                            <p class="hero-slider__description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                            <a href="" class="hero-slider__btn project-btn">Sprawdź</a>
                            <a href="#inwestycje" class="hero-slider__scroll">
                                <span class="hero-slider__scroll-text">Zjedź niżej</span>
                                <div class="text-center mt-2 mt-sm-3">
                                    <img src="{{ asset('images/scroll-down.svg') }}" alt="strzałka w dół" class="img-scroll-down" width="18" height="10" loading="eager">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-relative">
                <img src="{{ asset('images/ow.png') }}" class="hero-slider__img" width="1230" height="800" alt="osiedle" loading="eager">
                <img src="{{ asset('images/ow-tlo.png') }}" class="hero-slider__img-bg" width="667" height="800" alt="osiedle" loading="eager">
                <div  class="hero-slider__img-et">
                    <p class="hero-slider__img-et-title">Osiedle Rusiec</p>
                    <p class="hero-slider__img-et-desc">123 m2 / 4 pokoje</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-xxl-6 hero-slider__text">
                            <h2 class="hero-slider__heading text-color">Osiedle Rusiec</h2>
                            <p class="hero-slider__description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                            <a href="" class="hero-slider__btn project-btn">Sprawdź</a>
                            <a href="#inwestycje" class="hero-slider__scroll">
                                <span class="hero-slider__scroll-text">Zjedź niżej</span>
                                <div class="text-center mt-2 mt-sm-3">
                                    <img src="{{ asset('images/scroll-down.svg') }}" alt="strzałka w dół" class="img-scroll-down" width="18" height="10" loading="eager">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="position-relative">
                <img src="{{ asset('images/ow.png') }}" class="hero-slider__img" width="1230" height="800" alt="osiedle" loading="eager">
                <img src="{{ asset('images/ow-tlo.png') }}" class="hero-slider__img-bg" width="667" height="800" alt="osiedle" loading="eager">
                <div  class="hero-slider__img-et">
                    <p class="hero-slider__img-et-title">Osiedle Nastrojowa</p>
                    <p class="hero-slider__img-et-desc">170 m2 / 5 pokoi</p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-xxl-6 hero-slider__text">
                            <h2 class="hero-slider__heading text-color">Osiedle Nastrojowa</h2>
                            <p class="hero-slider__description">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                            <a href="" class="hero-slider__btn project-btn">Sprawdź</a>
                            <a href="#inwestycje" class="hero-slider__scroll">
                                <span class="hero-slider__scroll-text">Zjedź niżej</span>
                                <div class="text-center mt-2 mt-sm-3">
                                    <img src="{{ asset('images/scroll-down.svg') }}" alt="strzałka w dół" class="img-scroll-down" width="18" height="10" loading="eager">
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="investment project-tabs sec-pad-big radial-bg-2" id="inwestycje">
            <div class="container mt-4">
                <div class="section-header text-center mb-3">
                    <p class="section-header__subtitle" data-aos="fade-up" data-aos-duration="700">Dowiedz się więcej</p>
                    <h2 class="section-header__title" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Wybierz inwestycję</h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 mx-auto">
                        <ul class="nav nav-tabs" id="investTab" role="tablist">
                            <li class="nav-item col-6 col-sm-4" role="presentation">
                                <button class="nav-link active" id="nr1-tab" data-bs-toggle="tab" data-bs-target="#nr1" type="button" role="tab" aria-controls="nr1" aria-selected="true">
                                    <img src="{{ asset('images/pin.svg') }}" alt="pinezka" width="15" height="21" loading="lazy">
                                    <span>Grodzisk Mazowiecki</span>
                                    <strong>Osiedle Wygodne</strong>
                                </button>
                            </li>
                            <li class="nav-item col-6 col-sm-4" role="presentation">
                                <button class="nav-link" id="nr2-tab" data-bs-toggle="tab" data-bs-target="#nr2" type="button" role="tab" aria-controls="nr2" aria-selected="false">
                                    <img src="{{ asset('images/pin.svg') }}" alt="pinezka" width="15" height="21" loading="lazy">
                                    <span>Nadarzyn</span>
                                    <strong>Osiedle Nastrojowa</strong>
                                </button>
                            </li>
                            <li class="nav-item col-sm-4" role="presentation">
                                <button class="nav-link" id="nr3-tab" data-bs-toggle="tab" data-bs-target="#nr3" type="button" role="tab" aria-controls="nr3" aria-selected="false">
                                    <img src="{{ asset('images/pin.svg') }}" alt="pinezka" width="15" height="21" loading="lazy">
                                    <span>Nadarzyn</span>
                                    <strong>Osiedle Rusiec</strong>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="investTabContent">
                <div class="tab-pane active position-relative" id="nr1" role="tabpanel" aria-labelledby="nr1-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5">
                                <h3 class="section-header__title">Osiedle Wygodne</h3>
                                <div class="mb-5">
                                    <p><strong>Osiedle Wygodne zlokalizowane jest w Grodzisku Mazowieckim przy ulicy Kazimierza Pułaskiego 14.</strong> </p>
                                    <p>Inwestycja składa się z 28 szeregowych domów. Każdy z domów ma 98,53 m2 powierzchni użytkowej oraz dodatkowe poddasze do zagospodarowania wg własnych potrzeb o powierzchni 30,02 m2. W domu na parterze znajduje się przestronny salon z aneksem kuchennym, wc, korytarz oraz garaż jednostanowiskowy.</p>
                                    <p>Na piętrze mamy 3 sypialnie z dużymi oknami oraz łazienkę.</p>
                                </div>
                                <a href="" class="project-btn project-btn--gray">Sprawdź</a>
                            </div>
                        </div>
                    </div>
                    <div class="container-slider-right">
                        <div class="position-relative">
                            <img src="{{ asset('images/ow-tlo.jpg') }}" alt="zdjęcie inwestycji" class="investment__img-bg" width="550" height="600" loading="lazy">
                            <div class="slider investment-slider">
                                <div>
                                    <div class="investment-slider__photo">
                                        <img class="" src="{{ asset('images/os-wyg.jpg') }}" alt="zdjęcie inwestycji" width="532" height="432" loading="lazy">
                                    </div>
                                </div>
                                <div>
                                    <div class="investment-slider__photo">
                                        <img class="" src="{{ asset('images/os-wyg.jpg') }}" alt="zdjęcie inwestycji" width="532" height="432" loading="lazy">
                                    </div>
                                </div>
                                <div>
                                    <div class="investment-slider__photo">
                                        <img class="" src="{{ asset('images/os-wyg.jpg') }}" alt="zdjęcie inwestycji" width="532" height="432" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade position-relative" id="nr2" role="tabpanel" aria-labelledby="nr2-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5">
                                <h3 class="section-header__title">Osiedle Nastrojowa</h3>
                                <p><strong>Osiedle Wygodne zlokalizowane jest w Grodzisku Mazowieckim przy ulicy Kazimierza Pułaskiego 14.</strong> </p>
                                <p>Inwestycja składa się z 28 szeregowych domów. Każdy z domów ma 98,53 m2 powierzchni użytkowej oraz dodatkowe poddasze do zagospodarowania wg własnych potrzeb o powierzchni 30,02 m2. W domu na parterze znajduje się przestronny salon z aneksem kuchennym, wc, korytarz oraz garaż jednostanowiskowy.</p>
                                <p>Na piętrze mamy 3 sypialnie z dużymi oknami oraz łazienkę.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container-slider-right">
                        <div class="position-relative">
                            <img src="{{ asset('images/ow-tlo.jpg') }}" alt="zdjęcie inwestycji" class="investment__img-bg" width="550" height="600" loading="lazy">
                            <div class="slider investment-slider">
                                <div>
                                    <div class="investment-slider__photo">
                                        <img class="" src="{{ asset('images/os-wyg.jpg') }}" alt="zdjęcie inwestycji" width="532" height="432" loading="lazy">
                                    </div>
                                </div>
                                <div>
                                    <div class="investment-slider__photo">
                                        <img class="" src="{{ asset('images/os-wyg.jpg') }}" alt="zdjęcie inwestycji" width="532" height="432" loading="lazy">
                                    </div>
                                </div>
                                <div>
                                    <div class="investment-slider__photo">
                                        <img class="" src="{{ asset('images/os-wyg.jpg') }}" alt="zdjęcie inwestycji" width="532" height="432" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane position-relative" id="nr3" role="tabpanel" aria-labelledby="nr3-tab">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5">
                                <h3 class="section-header__title">Osiedle Rusiec</h3>
                                <div class="mb-5">
                                    <p><strong>Osiedle Wygodne zlokalizowane jest w Grodzisku Mazowieckim przy ulicy Kazimierza Pułaskiego 14.</strong> </p>
                                    <p>Inwestycja składa się z 28 szeregowych domów. Każdy z domów ma 98,53 m2 powierzchni użytkowej oraz dodatkowe poddasze do zagospodarowania wg własnych potrzeb o powierzchni 30,02 m2. W domu na parterze znajduje się przestronny salon z aneksem kuchennym, wc, korytarz oraz garaż jednostanowiskowy.</p>
                                    <p>Na piętrze mamy 3 sypialnie z dużymi oknami oraz łazienkę.</p>
                                </div>
                                <a href="" class="project-btn project-btn--gray">Sprawdź</a>
                            </div>
                        </div>
                    </div>
                    <div class="container-slider-right">
                        <div class="position-relative">
                            <img src="{{ asset('images/ow-tlo.jpg') }}" alt="zdjęcie inwestycji" class="investment__img-bg" width="550" height="600" loading="lazy">
                            <div class="slider investment-slider">
                                <div>
                                    <div class="investment-slider__photo">
                                        <img class="" src="{{ asset('images/os-wyg.jpg') }}" alt="zdjęcie inwestycji" width="532" height="432" loading="lazy">
                                    </div>
                                </div>
                                <div>
                                    <div class="investment-slider__photo">
                                        <img class="" src="{{ asset('images/os-wyg.jpg') }}" alt="zdjęcie inwestycji" width="532" height="432" loading="lazy">
                                    </div>
                                </div>
                                <div>
                                    <div class="investment-slider__photo">
                                        <img class="" src="{{ asset('images/os-wyg.jpg') }}" alt="zdjęcie inwestycji" width="532" height="432" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="advantages sec-pad-big radial-bg-2 radial-right">
            <div class="position-relative">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 ms-auto">
                            <div class="section-header text-center text-sm-end mb-3">
                                <p class="section-header__subtitle" data-aos="fade-up" data-aos-duration="700">Dlaczego warto nas wybrać?</p>
                                <h2 class="section-header__title" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Poznaj nasze atuty</h2>
                            </div>
                            <div class="w-80-right" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                                <div class="text-center text-sm-end">
                                    <p><strong>Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</strong></p>
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
                                </div>
                            </div>
                            <div class="row" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                                <div class="col-md-6">
                                    <div class="advantages__box">
                                        <div class="row align-items-center">
                                            <div class="col-3 col-sm-4">
                                                <img src="{{ asset('images/medal.svg') }}" alt="ikonka" class="advantages__box-img" width="53" height="53" loading="lazy">
                                            </div>
                                            <div class="col-9 col-sm-8">
                                                <p class="mb-0">Wysoki standard wykonania</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="advantages__box">
                                        <div class="row align-items-center">
                                            <div class="col-3 col-sm-4">
                                                <img src="{{ asset('images/miejsce.svg') }}" alt="ikonka" class="advantages__box-img" width="53" height="53" loading="lazy">
                                            </div>
                                            <div class="col-9 col-sm-8">
                                                <p class="mb-0">Wysoki standard wykonania</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="advantages__box">
                                        <div class="row align-items-center">
                                            <div class="col-3 col-sm-4">
                                                <img src="{{ asset('images/szkic.svg') }}" alt="ikonka" class="advantages__box-img" width="53" height="53" loading="lazy">
                                            </div>
                                            <div class="col-9 col-sm-8">
                                                <p class="mb-0">Wysoki standard wykonania</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="advantages__box">
                                        <div class="row align-items-center">
                                            <div class="col-3 col-sm-4">
                                                <img src="{{ asset('images/garaz.svg') }}" alt="ikonka" class="advantages__box-img" width="53" height="53" loading="lazy">
                                            </div>
                                            <div class="col-9 col-sm-8">
                                                <p class="mb-0">Wysoki standard wykonania</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                        </div>
                    </div>
                </div>
                <div class="container-slider-left sec-pad">
                    <div class="position-relative">
                        <img src="{{ asset('images/ow-tlo.jpg') }}" alt="zdjęcie inwestycji" class="advantages__img-bg" width="550" height="600" loading="lazy">
                        <div class="slider advantages-slider">
                            <div>
                                <div class="advantages-slider__photo">
                                    <img class="" src="{{ asset('images/atuty2.jpg') }}" alt="zdjęcie inwestycji" width="532" height="432" loading="lazy">
                                </div>
                            </div>
                            <div>
                                <div class="advantages-slider__photo">
                                    <img class="" src="{{ asset('images/atuty2.jpg') }}" alt="zdjęcie inwestycji" width="532" height="432" loading="lazy">
                                </div>
                            </div>
                            <div>
                                <div class="advantages-slider__photo">
                                    <img class="" src="{{ asset('images/atuty1.jpg') }}" alt="zdjęcie inwestycji" width="532" height="432" loading="lazy">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <section class="cta sec-pad-big">
            <div class="container">
                <div class="row">
                    <div class="col-11 col-xxl-10 mx-auto cta__box" data-aos="flip-up" data-aos-duration="700" loading="lazy">
                        <img src="{{ asset('images/tlo-cta.jpg') }}" alt="budynek" class="cta__img-bg" width="295" height="510" loading="lazy">
                        <img src="{{ asset('images/kobieta-cta.png') }}" alt="kobieta" class="cta__img" width="428" height="627" loading="lazy">
                        <div class="row">
                            <div class="col-xl-7">
                                <div class="section-header mb-3">
                                    <p class="section-header__subtitle">Kontakt z nami</p>
                                    <h2 class="section-header__title">Zapytaj o ofertę</h2>
                                </div>
                                <div>
                                    <p><strong>Poczucie satysfakcji i komfort życia naszych klientów są dla nas bardzo ważne.</strong></p>
                                    <p> Z tego powodu zapewniamy kompleksową i profesjonalną obsługę na wszystkich etapach współpracy. Nasi doradcy pomogą Ci znaleźć dom, idealnie dopasowany do potrzeb Twoich i Twoi bliskich.</p>
                                </div>
                                <div class="cta__contact mt-5 d-flex align-items-center">
                                    <div class="d-flex align-items-center me-sm-5 mb-4 mb-md-0">
                                        <a href="mailto:eximaco@eximaco-development.pl">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" class="project-icon">
                                                <g transform="translate(-434 -3586)">
                                                    <g transform="translate(434 3586)" fill="none" stroke="#fff" stroke-width="1">
                                                        <ellipse cx="19.5" cy="19" rx="19.5" ry="19" stroke="none"/>
                                                        <ellipse cx="19.5" cy="19" rx="19" ry="18.5" fill="none"/>
                                                    </g>
                                                    <g transform="translate(445.421 3599.387)">
                                                        <path data-name="Path 119" d="M4.679,6H18.107a1.684,1.684,0,0,1,1.679,1.679V17.75a1.684,1.684,0,0,1-1.679,1.679H4.679A1.684,1.684,0,0,1,3,17.75V7.679A1.684,1.684,0,0,1,4.679,6Z" transform="translate(-3 -6)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                                        <path data-name="Path 120" d="M19.786,9l-8.393,5.875L3,9" transform="translate(-3 -7.321)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                                    </g>
                                                </g>
                                            </svg>

                                            eximaco@eximaco-development.pl</a>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <a href="tel:+48537801301">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" class="project-icon">
                                                <g transform="translate(-769 -3586)">
                                                    <g data-name="Ellipse 20" transform="translate(769 3586)" fill="none" stroke="#fff" stroke-width="1">
                                                        <ellipse cx="19.5" cy="19" rx="19.5" ry="19" stroke="none"/>
                                                        <ellipse cx="19.5" cy="19" rx="19" ry="18.5" fill="none"/>
                                                    </g>
                                                    <path data-name="Icon feather-phone" d="M17.985,14.116v2.235a1.49,1.49,0,0,1-1.624,1.49,14.745,14.745,0,0,1-6.43-2.287,14.528,14.528,0,0,1-4.47-4.47,14.745,14.745,0,0,1-2.287-6.46A1.49,1.49,0,0,1,4.657,3H6.892a1.49,1.49,0,0,1,1.49,1.281A9.566,9.566,0,0,0,8.9,6.375a1.49,1.49,0,0,1-.335,1.572l-.946.946a11.921,11.921,0,0,0,4.47,4.47l.946-.946a1.49,1.49,0,0,1,1.572-.335A9.566,9.566,0,0,0,16.7,12.6,1.49,1.49,0,0,1,17.985,14.116Z" transform="translate(777.813 3595.17)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1"/>
                                                </g>
                                            </svg>

                                            537 801 301</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact text-center text-sm-start sec-pad radial-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 mb-5 mb-lg-0">
                        <div class="section-header mb-3">
                            <p class="section-header__subtitle" data-aos="fade-up" data-aos-duration="700">Inwestycje Nadarzyn</p>
                            <h2 class="section-header__title" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Gdzie nas znajdziesz?</h2>
                        </div>
                        <div class="mb-5" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">
                            <p><strong>Firma Eximaco działa na rynku usług budowlanych od 35 lat. Dzięki współpracy z doświadczonymi architektami, dostawcami materiałów budowlanych oraz wieloma innymi specjalistami, zapewnia wysoki standard usług i poczucie bezpieczeństwa swoim klientom.</strong></p>
                            <p>Kompleksowa obsługa i profesjonalne doradztwo, to również istotne elementy codziennej działalności firmy, która z każdą inwestycją umacnia swój wizerunek rzetelnego inwestora.</p>
                        </div>
                        <a href="" class="project-btn project-btn--gray" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Sprawdź</a>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
