@extends('layouts.page', ['body_class' => 'completed-page'])

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
                        <li class="breadcrumb-item"><a href="{{ route('front.current') }}">Inwestycje w sprzedaży</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('front.current.show', $investment->slug) }}">{{ $investment->name }}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Plan inwestycji</li>
                    </ol>
                </nav>
            </div>
        </section>

        <section class="first-sec investment-details project-tabs sec-pad radial-bg-2">
            <div class="container mt-4">
                <div class="section-header text-center mb-3">
                    <p class="section-header__subtitle">Dostępne domy</p>
                    <h1 class="section-header__title">{{ $investment->name }}</h1>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <ul class="nav nav-tabs" id="detailsTab" role="tablist">
                            <li class="nav-item col-6 col-sm-4" role="presentation">
                                <a class="nav-link" id="details1-tab" href="{{ route('front.current.show', $investment->slug) }}">
                                    <img src="{{ asset('images/opis.svg') }}" alt="plik" width="25" height="25" loading="eager">
                                    <span>Wybierz</span>
                                    <strong>Opis inwestycji</strong>
                                </a>
                            </li>
                            <li class="nav-item col-6 col-sm-4" role="presentation">
                                <button class="nav-link active" id="details2-tab" data-bs-toggle="tab" data-bs-target="#details2" type="button" role="tab" href="{{ route('front.developro.investment.index', $investment->slug) }}">
                                    <img src="{{ asset('images/dostepne.svg') }}" alt="dom" width="25" height="25" loading="eager">
                                    <span>Wybierz</span>
                                    <strong>Dostępne domy</strong>
                                </button>
                            </li>
                            <li class="nav-item col-sm-4" role="presentation">
                                <a class="nav-link" id="details3-tab" href="{{ route('front.developro.investment.contact', $investment->slug) }}">
                                    <img src="{{ asset('images/kontakt.svg') }}" alt="avatar" width="25" height="25" loading="eager">
                                    <span>Wybierz</span>
                                    <strong>Kontakt</strong>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="tab-content" id="detailsTabContent">
                    <div class="tab-pane active" id="details2" role="tabpanel" aria-labelledby="details2-tab">
                        <div class="row">
                            <div class="col-lg-9 mx-auto d-flex justify-content-center">
                                <img src="{{ asset('/investment/plan/'.$investment->plan->file) }}" alt="{{$investment->name}}" id="invesmentplan" usemap="#invesmentplan" class="investment-details-photo" loading="eager">
                                <map name="invesmentplan">
                                    @if($investment->houses)
                                        @foreach($investment->houses as $house)
                                            <area
                                                    shape="poly"
                                                    href="{{route('front.developro.house.index', ['slug' => $investment->slug, 'property' => $house])}}"
                                                    title="{{$house->name}}"
                                                    alt="{{$house->slug}}"
                                                    data-item="{{$house->id}}"
                                                    data-roomnumber="{{$house->number}}"
                                                    data-roomtype="{{$house->typ}}"
                                                    data-roomstatus="{{$house->status}}"
                                                    coords="@if($house->html) {{cords($house->html)}} @endif">
                                        @endforeach
                                    @endif
                                </map>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="search-form">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 mx-auto">
                        <div class="form-container">
                            <form id="mainsearch" method="get" action="">
                                <div class="row">
                                    <div class="col-sm-11">
                                        <div class="row">
                                            <div class="col-6 col-lg-3">
                                                <div class="select-container">
                                                    <label for="s_metryod" class="form-label">Metraż</label>
                                                    <select id="s_metryod" name="s_metryod" class="form-select">
                                                        <option value="">Od</option>
                                                        <option value="30">30 m²</option>
                                                        <option value="35">35 m²</option>
                                                        <option value="40">40 m²</option>
                                                        <option value="45">45 m²</option>
                                                        <option value="51">51 m²</option>
                                                        <option value="52">52 m²</option>
                                                        <option value="60">60 m²</option>
                                                        <option value="67">67 m²</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <div class="select-container">
                                                    <label for="s_metrydo" class="form-label">Metraż</label>
                                                    <select id="s_metrydo" name="s_metrydo" class="form-select">
                                                        <option value="">Do</option>
                                                        <option value="30">30 m²</option>
                                                        <option value="35">35 m²</option>
                                                        <option value="40">40 m²</option>
                                                        <option value="45">45 m²</option>
                                                        <option value="51">51 m²</option>
                                                        <option value="52">52 m²</option>
                                                        <option value="60">60 m²</option>
                                                        <option value="67">67 m²</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <div class="select-container">
                                                    <label for="s_pokojeod" class="form-label">Ilość pokoi</label>
                                                    <select name="s_pokojeod" id="s_pokojeod" class="form-select">
                                                        <option value="">Od 1</option>
                                                        <option value="1">1 pokojowe</option>
                                                        <option value="2">2 pokojowe</option>
                                                        <option value="3">3 pokojowe</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-3">
                                                <div class="select-container">
                                                    <label for="s_pokojedo" class="form-label">Ilość pokoi</label>
                                                    <select name="s_pokojedo" id="s_pokojedo" class="form-select">
                                                        <option value="">Do 3</option>
                                                        <option value="1">1 pokojowe</option>
                                                        <option value="2">2 pokojowe</option>
                                                        <option value="3">3 pokojowe</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-1 align-self-center text-center mt-3 mt-sm-0">
                                        <button type="submit">
                                            <img src="{{ asset('images/search.svg') }}" alt="ikona szukaj" width="60" height="60" loading="lazy">
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="search-results sec-pad p-0">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 mx-auto pt-5 d-flex aligm-items-center justify-content-end">
                        <div class="list-view d-flex aligm-items-center">
                            <div id="grid">
                                <img src="{{ asset('images/mala-lista.svg') }}" alt="ikonka" width="41" height="29" loading="lazy">
                                <a href="dostepne-domy-2.html">Mała lista</a>
                            </div>
                            <span id="list" class="ps-5">
                                <img src="{{ asset('images/duza-lista.svg') }}" alt="ikonka" width="37" height="29" loading="lazy"> Duża lista
                            </span>
                        </div>
                    </div>
                    <div class="col-xl-10 mx-auto">
                        <div id="offerList">
                            @if($investment->houses)
                            @foreach($investment->houses as $house)
                            <div class="offer-list-box status-sprzedany position-relative" data-aos="fade-up" data-aos-duration="700">
                                <div class="row align-items-center">
                                    <div class="col-lg-3 offer-list-box__img">
                                        @if($house->file)
                                            <a href="{{route('front.developro.house.index', ['slug' => $investment->slug, 'property' => $house])}}">
                                            <picture>
                                                <source type="image/webp" srcset="/investment/property/list/webp/{{$house->file_webp}}">
                                                <source type="image/jpeg" srcset="/investment/property/list/{{$house->file}}">
                                                <img src="/investment/property/list/{{$house->file}}" alt="Plan {{$house->name}}" loading="lazy">
                                            </picture>
                                            </a>
                                        @endif
                                    </div>
                                    <div class="col-lg-1 offer-list-box__name">
                                        <a href="{{route('front.developro.house.index', ['slug' => $investment->slug, 'property' => $house])}}">
                                        <p class="mb-2">{{$house->name_list}}</p>
                                        <p class="offer-list-box__name--big mb-0">{{$house->number}}</p>
                                        </a>
                                    </div>
                                    <div class="col-6 text-center text-lg-start col-lg-1 offer-list-box__rooms">
                                        <p class="">Pokoje</p>
                                        <p class="mb-0">{{$house->rooms}}</p>
                                    </div>
                                    <div class="col-6 text-center text-lg-start col-lg-1 offer-list-box__area">
                                        <p class="">Powierzchnia</p>
                                        <p class="mb-0">{{$house->area}} m<sup>2</sup></p>
                                    </div>
                                    <div class="col-6 col-lg-2 mt-4 mt-lg-0 text-center offer-list-box__pdf d-flex align-items-center justify-content-center justify-content-start">
                                        <img src="{{ asset('images/pdf.svg') }}" alt="pdf ikona" class="me-3" width="21" height="24" loading="lazy">
                                        <a href="{{ asset('investment/property/pdf/'.$house->file_pdf) }}" target="_blank">Pobierz pdf</a>
                                    </div>
                                    <div class="col-6 mt-4 mt-lg-0 text-center text-lg-start col-lg-3">
                                        <a href="{{route('front.developro.house.index', ['slug' => $investment->slug, 'property' => $house])}}" class="project-btn"><span>Sprawdź</span></a>
                                    </div>
                                </div>
                                <div class="offer-list-box__status-container">
                                    {!! roomStatusBadge($house->status) !!}
                                </div>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
@push('scripts')
    <script src="{{ asset('/js/plan/imagemapster.js') }}" charset="utf-8"></script>
    <script src="{{ asset('/js/plan/plan.js') }}" charset="utf-8"></script>
@endpush
