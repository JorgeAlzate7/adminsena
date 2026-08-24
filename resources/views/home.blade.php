@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/home.css') }}">
@endsection

@section('content')

<div class="sena-home">

    {{-- HERO --}}
    <section class="hero">

        <div class="hero-text">

            <span>ADMINSENA</span>

            <h1>
                Encuentra tu próxima
                <strong>oportunidad.</strong>
            </h1>

            <p>
                Explora nuestras ofertas de formación
                y encuentra el programa ideal para ti.
            </p>

            <a href="{{ route('ofertas.index') }}" class="btn-sena">
                Ver ofertas
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>

        <div class="hero-logo">
            <img
                src="{{ asset('image/logo-del-sena-01.png') }}"
                alt="Logo SENA"
                class="logo-sena"
            >
        </div>

    </section>


    {{-- OFERTAS --}}
    <section class="section">

        <div class="title">

            <span>OFERTAS DE FORMACIÓN</span>

            <h2>
                Aprende algo <strong>nuevo.</strong>
            </h2>

        </div>


        <div class="cards">

            <div class="card">

                <i class="bi bi-laptop"></i>

                <h3>
                    Tecnología
                </h3>

                <p>
                    Encuentra programas relacionados
                    con tecnología y desarrollo.
                </p>

                <a href="{{ route('ofertas.index') }}">
                    Ver ofertas →
                </a>

            </div>


            <div class="card">

                <i class="bi bi-briefcase"></i>

                <h3>
                    Administración
                </h3>

                <p>
                    Desarrolla habilidades para el
                    mundo empresarial y laboral.
                </p>

                <a href="{{ route('ofertas.index') }}">
                    Ver ofertas →
                </a>

            </div>


            <div class="card">

                <i class="bi bi-palette"></i>

                <h3>
                    Diseño
                </h3>

                <p>
                    Aprende y desarrolla tu creatividad
                    con diferentes programas.
                </p>

                <a href="{{ route('ofertas.index') }}">
                    Ver ofertas →
                </a>

            </div>

        </div>

    </section>


    {{-- QUIENES SOMOS --}}
    <section id="quienes-somos" class="about">

        <div>

            <span>QUIÉNES SOMOS</span>

            <h2>
                Formación para
                <strong>transformar.</strong>
            </h2>

        </div>

        <p>
            El Servicio Nacional de Aprendizaje SENA
            brinda formación para el trabajo y busca
            fortalecer las competencias de los
            colombianos para generar nuevas
            oportunidades.
        </p>

    </section>


    {{-- FINAL --}}
    <section class="final">

        <span>SENA</span>

        <h2>
            Tu futuro
            <strong>comienza aquí.</strong>
        </h2>

        <a href="{{ route('ofertas.index') }}" class="btn-sena">
            Explorar ofertas
            <i class="bi bi-arrow-right"></i>
        </a>

    </section>

</div>

@endsection