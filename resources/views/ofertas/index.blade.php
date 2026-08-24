@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/ofertas.css') }}">
@endsection

@section('content')

<div class="ofertas-page">

    {{-- ENCABEZADO --}}
    <section class="ofertas-header">

        <span>FORMACIÓN SENA</span>

        <h1>
            Encuentra tu
            <strong>oferta.</strong>
        </h1>

        <p>
            Explora nuestros programas de formación
            y encuentra el que más se adapte a ti.
        </p>

    </section>


    {{-- BUSCADOR --}}
    <div class="ofertas-search">

        <i class="bi bi-search"></i>

        <input
            type="text"
            placeholder="Buscar una oferta..."
        >

        <button>
            Buscar
        </button>

    </div>


    {{-- FILTROS --}}
    <div class="ofertas-filtros">

        <button class="filtro active">
            Todas
        </button>

        <button class="filtro">
            Tecnología
        </button>

        <button class="filtro">
            Administración
        </button>

        <button class="filtro">
            Diseño
        </button>

        <button class="filtro">
            Salud
        </button>

    </div>


    {{-- OFERTAS --}}
    <section class="ofertas-lista">

        <div class="oferta-card">

            <div class="oferta-icon">
                <i class="bi bi-laptop"></i>
            </div>

            <span class="oferta-area">
                TECNOLOGÍA
            </span>

            <h2>
                Análisis y Desarrollo
                de Software
            </h2>

            <p>
                Aprende a desarrollar aplicaciones,
                sistemas y soluciones tecnológicas.
            </p>

            <div class="oferta-info">

                <span>
                    <i class="bi bi-clock"></i>
                    Tecnólogo
                </span>

                <span>
                    <i class="bi bi-geo-alt"></i>
                    Presencial
                </span>

            </div>

            <a href="#" class="oferta-btn">
                Ver oferta
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>


        <div class="oferta-card">

            <div class="oferta-icon">
                <i class="bi bi-briefcase"></i>
            </div>

            <span class="oferta-area">
                ADMINISTRACIÓN
            </span>

            <h2>
                Gestión
                Administrativa
            </h2>

            <p>
                Desarrolla competencias para apoyar
                procesos administrativos y empresariales.
            </p>

            <div class="oferta-info">

                <span>
                    <i class="bi bi-clock"></i>
                    Técnico
                </span>

                <span>
                    <i class="bi bi-geo-alt"></i>
                    Presencial
                </span>

            </div>

            <a href="#" class="oferta-btn">
                Ver oferta
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>


        <div class="oferta-card">

            <div class="oferta-icon">
                <i class="bi bi-palette"></i>
            </div>

            <span class="oferta-area">
                DISEÑO
            </span>

            <h2>
                Diseño
                Gráfico
            </h2>

            <p>
                Desarrolla tu creatividad y aprende
                herramientas de comunicación visual.
            </p>

            <div class="oferta-info">

                <span>
                    <i class="bi bi-clock"></i>
                    Tecnólogo
                </span>

                <span>
                    <i class="bi bi-geo-alt"></i>
                    Presencial
                </span>

            </div>

            <a href="#" class="oferta-btn">
                Ver oferta
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>


        <div class="oferta-card">

            <div class="oferta-icon">
                <i class="bi bi-heart-pulse"></i>
            </div>

            <span class="oferta-area">
                SALUD
            </span>

            <h2>
                Atención
                Integral en Salud
            </h2>

            <p>
                Fórmate para desarrollar actividades
                relacionadas con el sector salud.
            </p>

            <div class="oferta-info">

                <span>
                    <i class="bi bi-clock"></i>
                    Técnico
                </span>

                <span>
                    <i class="bi bi-geo-alt"></i>
                    Presencial
                </span>

            </div>

            <a href="#" class="oferta-btn">
                Ver oferta
                <i class="bi bi-arrow-right"></i>
            </a>

        </div>

    </section>

</div>

@endsection