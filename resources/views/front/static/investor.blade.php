@extends('layouts.page', ['body_class' => 'about-page'])

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
                        <li class="breadcrumb-item active" aria-current="page">Inwestor</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="first-sec sec-pad investor-section">
            <div class="container inline inline-tc">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="section-header mb-3">
                            <h1 class="section-header__title" data-modaltytul="2">{!! getInline($array, 2, 'modaltytul') !!}</h1>
                        </div>
                        <div class="inner-html desc-anim" data-modaleditortext="2">
                            {!! getInline($array, 2, 'modaleditortext') !!}</div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 align-self-center photo-anim">
                        <img src="{{ getInline($array, 2, 'file') }}" alt="{{ getInline($array, 2, 'file_alt') }}" class="investor-photo" width="640" height="479" loading="eager" data-img="2">
                    </div>
                </div>
                @auth
                    <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="2" data-hideinput="modaleditor,modallink,modallinkbutton" data-method="update" data-imgwidth="672" data-imgheight="503"></button></div>
                @endauth
            </div>
        </section>

        <section class="investor-about investments-list sec-pad radial-bg-2">
            <div class="container inline inline-tc">
                <div class="section-header section-header--main text-center">
                    <p class="section-header__subtitle" data-aos="fade-up" data-aos-duration="700">O nas</p>
                    <h2 class="section-header__title" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Co nas wyróżnia?</h2>
                </div>
                <div class="row">
                    <div class="col-xl-5 mb-5 mb-xl-0 align-self-center">
                        <div class="section-header mb-3" data-aos="fade-in" data-aos-duration="700">
                            <p class="section-header__subtitle" data-modaleditor="3">{!! getInline($array, 3, 'modaleditor') !!}</p>
                            <h2 class="section-header__title" data-modaltytul="3">{!! getInline($array, 3, 'modaltytul') !!}</h2>
                        </div>
                        <div class="inner-html mb-4" data-aos="fade-in" data-aos-duration="700" data-aos-delay="300" data-modaleditortext="3">
                            {!! getInline($array, 3, 'modaleditortext') !!}
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 align-self-center position-relative" data-aos="fade-up" data-aos-duration="700">
                        <div class="investments-list__blurred-photo">
                            <img src="{{ getInline($array, 3, 'file') }}" alt="ludzie" width="456" height="488" loading="lazy" data-img="3">
                        </div>
                        <div class="investments-list__photo">
                            <img src="{{ getInline($array, 3, 'file') }}" alt="ludzie" width="440" height="360" loading="lazy" data-img="3">
                        </div>
                    </div>
                </div>
                @auth
                    <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="3" data-hideinput="modallink,modallinkbutton" data-method="update" data-imgwidth="886" data-imgheight="720"></button></div>
                @endauth
            </div>
        </section>

        <section class="investor-about investments-list--reverse sec-pad">
            <div class="container inline inline-tc">
                <div class="row">
                    <div class="col-xl-6 order-2 order-xl-1 align-self-center position-relative" data-aos="fade-up" data-aos-duration="700">
                        <div class="investments-list__blurred-photo">
                            <img src="{{ getInline($array, 4, 'file') }}" alt="kobieta" width="456" height="488" loading="lazy" data-img="4">
                        </div>
                        <div class="investments-list__photo">
                            <img src="{{ getInline($array, 4, 'file') }}" alt="kobieta" width="440" height="360" loading="lazy" data-img="4">
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 order-1 order-xl-2 mb-5 mb-xl-0 align-self-center">
                        <div class="section-header mb-3" data-aos="fade-in" data-aos-duration="700">
                            <p class="section-header__subtitle" data-modaleditor="4">{!! getInline($array, 4, 'modaleditor') !!}</p>
                            <h2 class="section-header__title" data-modaltytul="4">{!! getInline($array, 4, 'modaltytul') !!}</h2>
                        </div>
                        <div class="inner-html mb-4" data-aos="fade-in" data-aos-duration="700" data-aos-delay="300" data-modaleditortext="4">
                            {!! getInline($array, 4, 'modaleditortext') !!}
                        </div>
                    </div>
                </div>
                @auth
                    <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="4" data-hideinput="modallink,modallinkbutton" data-method="update" data-imgwidth="870" data-imgheight="708"></button></div>
                @endauth
            </div>
        </section>

        <section class="investor-about investments-list sec-pad radial-bg-2">
            <div class="container inline inline-tc">
                <div class="row">
                    <div class="col-xl-5 mb-5 mb-xl-0 align-self-center">
                        <div class="section-header mb-3" data-aos="fade-in" data-aos-duration="700">
                            <p class="section-header__subtitle" data-modaleditor="5">{!! getInline($array, 5, 'modaleditor') !!}</p>
                            <h2 class="section-header__title" data-modaltytul="5">{!! getInline($array, 5, 'modaltytul') !!}</h2>
                        </div>
                        <div class="inner-html mb-4" data-aos="fade-in" data-aos-duration="700" data-aos-delay="300" data-modaleditortext="5">
                            {!! getInline($array, 5, 'modaleditortext') !!}
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 align-self-center position-relative" data-aos="fade-up" data-aos-duration="700">
                        <div class="investments-list__blurred-photo">
                            <img src="{{ getInline($array, 5, 'file') }}" alt="ludzie" width="456" height="488" loading="lazy" data-img="5">
                        </div>
                        <div class="investments-list__photo">
                            <img src="{{ getInline($array, 5, 'file') }}" alt="ludzie" width="440" height="360" loading="lazy" data-img="5">
                        </div>
                    </div>
                </div>
                @auth
                    <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="5" data-hideinput="modallink,modallinkbutton" data-method="update" data-imgwidth="886" data-imgheight="720"></button></div>
                @endauth
            </div>
        </section>

        <section class="our-features sec-pad" data-aos="fade-in" data-aos-duration="700">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mx-auto">
                        <div class="our-features__box text-center" data-aos="fade-in" data-aos-duration="700">
                            <p class="our-features__desc mb-4">Doświadczony zespół</p>
                            <img src="{{ asset('uploads/inline/zespol.svg') }}" alt="ikonka" class="our-features__icon" width="116" height="116" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="row row-middle">
                    <div class="col-lg-4">
                        <div class="our-features__box d-flex align-items-center justify-content-end" data-aos="fade-in" data-aos-duration="700">
                            <p class="our-features__desc">Wieloletnie doświadczenie</p>
                            <img src="{{ asset('uploads/inline/doswiadczenie.svg') }}" alt="ikonka"  class="our-features__icon" width="116" height="116" loading="lazy">
                        </div>
                    </div>
                    <div class="col-lg-4 text-center d-none d-lg-block">
                        <img src="{{ asset('uploads/inline/logo.svg') }}" alt="logo" width="204" height="75" loading="lazy" data-aos="fade-in" data-aos-duration="700">
                    </div>
                    <div class="col-lg-4">
                        <div class="our-features__box d-flex align-items-center justify-content-start" data-aos="fade-in" data-aos-duration="700">
                            <img src="{{ asset('uploads/inline/klienci.svg') }}" alt="ikonka"  class="our-features__icon" width="116" height="116" loading="lazy">
                            <p class="our-features__desc">Zadowoleni klienci</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 mx-auto">
                        <div class="our-features__box text-center" data-aos="fade-in" data-aos-duration="700">
                            <img src="{{ asset('uploads/inline/klienci.svg') }}" alt="ikonka"  class="our-features__icon" width="116" height="116" loading="lazy">
                            <p class="our-features__desc mt-lg-4">Deweloper godny zaufania</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="investments-other sec-pad">
            <div class="container">
                <div class="section-header text-center inline inline-tc">
                    <p class="section-header__subtitle" data-aos="fade-up" data-aos-duration="700" data-modaleditor="6">{!! getInline($array, 6, 'modaleditor') !!}</p>
                    <h2 class="section-header__title"  data-aos="fade-up" data-aos-duration="700" data-aos-delay="300" data-modaltytul="6">{!! getInline($array, 6, 'modaltytul') !!}</h2>
                    @auth
                        <div class="inline-btn"><button type="button" class="btn btn-primary btn-modal btn-sm" data-bs-toggle="modal" data-bs-target="#inlineModal" data-inline="6" data-hideinput="modaleditortext,modallink,modallinkbutton,file,file_alt" data-method="update" data-imgwidth="886" data-imgheight="720"></button></div>
                    @endauth
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="investments-other-slider">
                            @foreach($investments as $r)
                                <div>
                                    <div class="investments-other__box">
                                        <div class="row">
                                            <div class="col-md-5 col-xl-6 position-relative align-self-center">
                                                <div class="investments-other__blurred-photo">
                                                    <img src="{{ asset('investment/thumbs/'.$r->file_thumb) }}" alt="{{ $r->name }} inwestycji" width="224" height="224" loading="lazy">
                                                </div>
                                                <div class="investments-other__photo">
                                                    <img src="{{ asset('investment/thumbs/'.$r->file_thumb) }}" alt="{{ $r->name }} inwestycji" width="202" height="154" loading="lazy">
                                                </div>
                                            </div>
                                            <div class="col-md-7 col-xl-6">
                                                <div class="investments-other__box-desc">
                                                    <p class="section-header__subtitle">{{ $r->city }}</p>
                                                    <h3 class="investments-other__title">{{ $r->name }}</h3>
                                                    <a href="#" class="my-link">Zobacz więcej</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
