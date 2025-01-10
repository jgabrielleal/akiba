<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('components.partials.header')
    <!-- Native CSS -->
    <link rel="stylesheet" href="{{ asset('css/panel.css') }}">
</head>

<body class="panel-body">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/favicon.ico') }}" alt="Logo" class="logo">
            </a>
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-3 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#">
                            <img src="{{ asset('icons/panel/navbar/materias.svg') }}" alt="Matérias" />Matérias
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#">
                            <img src="{{ asset('icons/panel/navbar/locucao.svg') }}" alt="Locução" />Locução
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#">
                            <img src="{{ asset('icons/panel/navbar/radio.svg') }}" alt="Rádio" />Rádio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#">
                            <img src="{{ asset('icons/panel/navbar/podcast.svg') }}" alt="Podcasts" />Podcasts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#">
                            <img src="{{ asset('icons/panel/navbar/marketing.svg') }}" alt="Marketing" />Marketing
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#">
                            <img src="{{ asset('icons/panel/navbar/adms.svg') }}" alt="ADM's" />ADM's
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#">
                            <img src="{{ asset('icons/panel/navbar/logs.svg') }}" alt="Logs's" />Logs's
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-uppercase fst-italic d-flex gap-1" href="#">
                            <img src="{{ asset('icons/panel/navbar/perfil.svg') }}" alt="Perfil" />Perfil
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{ $slot }}
    @include('components.partials.scripts')
</body>

</html>