<header class="top-menu fixed-top">
    <div class="container">

        <nav class="navbar navbar-expand-xl">
            <a href="/" class="navbar-brand">
                <h1 class="h1-logo">
                    <img src="{{ asset('images/logo.svg') }}" width="204" height="75" alt="logo" loading="eager" title="Eximaco">
                </h1>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ps-xl-5">
                    <a class="nav-link" href="{{ route('front.current') }}">Inwestycje w sprzedaży</a>
                    <a class="nav-link" href="{{ route('front.completed') }}">Inwestycje zrealizowane</a>
                    <a class="nav-link" href="{{ route('front.investor') }}">Inwestor</a>
                    <a class="nav-link" href="{{ route('front.contact.index') }}">Kontakt</a>
                </div>
            </div>
        </nav>
    </div>
</header>