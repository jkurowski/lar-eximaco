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
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="section-header mb-3">
                            <h1 class="section-header__title">Inwestor</h1>
                        </div>
                        <div class="inner-html desc-anim">
                            <p><strong>Jesteśmy firmą rodzinną działającą w sektorze usług budowlanych od 35 lat.</strong></p>
                            <p>Na przestrzeni lat zakres realizowanych przez nas usług uległ znacznemu rozszerzeniu, a my sami zaczęliśmy specjalizować się w kompleksowej budowie domów jednorodzinnych oraz wielorodzinnych. Inwestycje zrealizowane pod szyldem Eximaco znajdują się na terenie województwa mazowieckiego, gdzie skoncentrowana jest nasza działalność od wielu lat.</p>
                            <p>Realizując zlecenie na budowę domu myślimy przede wszystkim o potrzebach naszych klientów, z tego powodu stawiamy na kompleksowość usługi i współpracę z najlepszymi specjalistami w branży. Jakość inwestycji jest dla nas równie ważna wówczas, gdy powstają całe osiedla domów. W takiej sytuacji staramy się budować tak, jakbyśmy sami mieli zamieszkać w jednym z nich.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 align-self-center photo-anim">
                        <img src="{{ asset('uploads/inline/ludzie.png') }}" alt="ludzie" class="investor-photo" width="640" height="479" loading="eager">
                    </div>
                </div>
            </div>
        </section>
        <section class="investor-about investments-list sec-pad radial-bg-2">
            <div class="container">
                <div class="section-header section-header--main text-center">
                    <p class="section-header__subtitle" data-aos="fade-up" data-aos-duration="700">O nas</p>
                    <h2 class="section-header__title" data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Co nas wyróżnia?</h2>
                </div>
                <div class="row">
                    <div class="col-xl-5 mb-5 mb-xl-0 align-self-center">
                        <div class="section-header mb-3" data-aos="fade-in" data-aos-duration="700">
                            <p class="section-header__subtitle">Podejście do klienta</p>
                            <h2 class="section-header__title">Podejście do klienta</h2>
                        </div>
                        <div class="inner-html mb-4" data-aos="fade-in" data-aos-duration="700" data-aos-delay="300">
                            <p><strong> To co nas wyróżnia to podejście do klienta. Każdy jest dla nas indywidualną osobowością, która posiada własne potrzeby i możliwości.</strong> </p>
                            <p>Nie budujemy na masową skalę. Cenimy sobie kameralne i przytulne inwestycje, które stają się dla naszych klientów ciepłym i rodzinnym domem na długie lata.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 align-self-center position-relative" data-aos="fade-up" data-aos-duration="700">
                        <div class="investments-list__blurred-photo">
                            <img src="{{ asset('uploads/inline/podejscie.jpg') }}" alt="ludzie" width="456" height="488" loading="lazy">
                        </div>
                        <div class="investments-list__photo">
                            <img src="{{ asset('uploads/inline/podejscie.jpg') }}" alt="ludzie" width="440" height="360" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="investor-about investments-list--reverse sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 order-2 order-xl-1 align-self-center position-relative" data-aos="fade-up" data-aos-duration="700">
                        <div class="investments-list__blurred-photo">
                            <img src="{{ asset('uploads/inline/uslugi.jpg') }}" alt="kobieta" width="456" height="488" loading="lazy">
                        </div>
                        <div class="investments-list__photo">
                            <img src="{{ asset('uploads/inline/uslugi.jpg') }}" alt="kobieta" width="440" height="360" loading="lazy">
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 order-1 order-xl-2 mb-5 mb-xl-0 align-self-center">
                        <div class="section-header mb-3" data-aos="fade-in" data-aos-duration="700">
                            <p class="section-header__subtitle">Budowa domu</p>
                            <h2 class="section-header__title">Kompleksowe usługi</h2>
                        </div>
                        <div class="inner-html mb-4" data-aos="fade-in" data-aos-duration="700" data-aos-delay="300">
                            <p><strong>Wiemy jak trudnym procesem jest budowa domu. To wieloetapowy plan działania, który wymaga wiedzy i doświadczenia.</strong> </p>
                            <p>W ten sposób możliwe jest skuteczne i sprawne przeprowadzenie całego procesu, począwszy od pozyskania zgody na budowę domu, poprzez przygotowanie fundamentów, na odbiorze kluczy kończąc. Z tego też powodu zapewniamy naszym klientom najwyższej jakości usługi, które realizujemy kompleksowo. Z nami budowa domu staje się łatwiejsza, a przejście przez wszelkie formalności nikomu nie są już straszne.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="investor-about investments-list sec-pad radial-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 mb-5 mb-xl-0 align-self-center">
                        <div class="section-header mb-3" data-aos="fade-in" data-aos-duration="700">
                            <p class="section-header__subtitle">Klient jest najważniejszy</p>
                            <h2 class="section-header__title">Nasi partnerzy</h2>
                        </div>
                        <div class="inner-html mb-4" data-aos="fade-in" data-aos-duration="700" data-aos-delay="300">
                            <p><strong>W naszej branży współpraca z najlepszymi to gwarancja sukcesu.</strong> </p>
                            <p>Z tego też powodu na przestrzeni lat wypracowaliśmy relacje partnerskie ze sprawdzonymi i doświadczonymi specjalistami, dzięki którym możemy zapewniać najlepszą jakość realizowanych projektów i inwestycji. W gronie naszych stałych partnerów odnaleźć można marki takie jak: Monier Brass, Isover, Termo Organika, Creation, Fakro, Velux, Solbet, Wienerberger oraz Ytong i Silka. Firmy te zapewniają nam dostęp do najlepszej klasy materiałów budowlanych i wykończeniowych.</p>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 align-self-center position-relative" data-aos="fade-up" data-aos-duration="700">
                        <div class="investments-list__blurred-photo">
                            <img src="{{ asset('uploads/inline/partnerzy.jpg') }}" alt="ludzie" width="456" height="488" loading="lazy">
                        </div>
                        <div class="investments-list__photo">
                            <img src="{{ asset('uploads/inline/partnerzy.jpg') }}" alt="ludzie" width="440" height="360" loading="lazy">
                        </div>
                    </div>
                </div>
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
                <div class="section-header text-center">
                    <p class="section-header__subtitle" data-aos="fade-up" data-aos-duration="700">Sprawdź również</p>
                    <h2 class="section-header__title"  data-aos="fade-up" data-aos-duration="700" data-aos-delay="300">Realizowane inwestycje</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="investments-other-slider">
                            <div>
                                <div class="investments-other__box">
                                    <div class="row">
                                        <div class="col-md-5 col-xl-6 position-relative align-self-center">
                                            <div class="investments-other__blurred-photo">
                                                <img src="{{ asset('uploads/inline/przy-plantach.jpg') }}" alt="zdjęcie inwestycji" width="224" height="224" loading="lazy">
                                            </div>
                                            <div class="investments-other__photo">
                                                <img src="{{ asset('uploads/inline/przy-plantach.jpg') }}" alt="zdjęcie inwestycji" width="202" height="154" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-xl-6">
                                            <div class="investments-other__box-desc">
                                                <p class="section-header__subtitle">Rusiec</p>
                                                <h3 class="investments-other__title">Osiedle przy turkusowej</h3>
                                                <a href="" class="my-link">Zobacz więcej</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="investments-other__box">
                                    <div class="row">
                                        <div class="col-md-5 col-xl-6 position-relative align-self-center">
                                            <div class="investments-other__blurred-photo">
                                                <img src="{{ asset('uploads/inline/przy-plantach.jpg') }}" alt="zdjęcie inwestycji" width="224" height="224" loading="lazy">
                                            </div>
                                            <div class="investments-other__photo">
                                                <img src="{{ asset('uploads/inline/przy-plantach.jpg') }}" alt="zdjęcie inwestycji" width="202" height="154" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-xl-6">
                                            <div class="investments-other__box-desc">
                                                <p class="section-header__subtitle">Rusiec</p>
                                                <h3 class="investments-other__title">Osiedle przy turkusowej</h3>
                                                <a href="" class="my-link">Zobacz więcej</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="investments-other__box">
                                    <div class="row">
                                        <div class="col-md-5 col-xl-6 position-relative align-self-center">
                                            <div class="investments-other__blurred-photo">
                                                <img src="{{ asset('uploads/inline/przy-plantach.jpg') }}" alt="zdjęcie inwestycji" width="224" height="224" loading="lazy">
                                            </div>
                                            <div class="investments-other__photo">
                                                <img src="{{ asset('uploads/inline/przy-plantach.jpg') }}" alt="zdjęcie inwestycji" width="202" height="154" loading="lazy">
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-xl-6">
                                            <div class="investments-other__box-desc">
                                                <p class="section-header__subtitle">Rusiec</p>
                                                <h3 class="investments-other__title">Osiedle przy turkusowej</h3>
                                                <a href="" class="my-link">Zobacz więcej</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
