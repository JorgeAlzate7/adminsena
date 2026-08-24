@extends('layouts.app')

@section('css')

<link rel="stylesheet" href="{{ asset('css/pages/conocenos.css') }}">

@endsection

@section('content')

<div class="conocenos-page">

    <!-- ENCABEZADO -->

    <div class="conocenos-header">

        <span>CONÓCENOS</span>

        <h1>
            Conoce nuestro <strong>propósito.</strong>
        </h1>

        <p>
            Conoce la misión y visión que orientan nuestro proyecto
            y nuestra forma de apoyar la formación del SENA.
        </p>

    </div>


    <!-- MISIÓN Y VISIÓN -->

    <div class="conocenos-grid">

        <!-- VISIÓN -->

        <div class="conocenos-card">

            <div class="conocenos-icon">
                <i class="bi bi-eye"></i>
            </div>

            <h2>Visión</h2>

            <p>
                Nuestra visión es seguir mejorando el sistema para
                convertirlo en una herramienta completa y útil para
                la gestión del SENA, incorporando nuevas funciones
                que permitan administrar la información de manera
                organizada, segura y accesible.
            </p>

        </div>


        <!-- MISIÓN -->

        <div class="conocenos-card">

            <div class="conocenos-icon">
                <i class="bi bi-bullseye"></i>
            </div>

            <h2>Misión</h2>

            <p>
                Nuestra misión es brindar una herramienta sencilla,
                organizada y fácil de utilizar que permita gestionar
                la información del SENA de una manera rápida y eficiente,
                facilitando el trabajo de los usuarios.
            </p>

        </div>

    </div>


    <!-- INFORMACIÓN -->

    <div class="conocenos-info">

        <i class="bi bi-mortarboard"></i>

        <div>

            <h3>Formación SENA</h3>

            <p>
                Trabajamos para ofrecer una experiencia sencilla
                y organizada para consultar las oportunidades de
                formación disponibles.
            </p>

        </div>

    </div>

</div>

@endsection