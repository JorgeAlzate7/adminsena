@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/centros.css') }}">
@endsection

@section('content')

<div class="centros-page">

    <div class="centro-detail-card">

        <div class="centro-detail-header">

            <div>

                <span>INFORMACIÓN DEL CENTRO</span>

                <h1>
                    Detalle del <strong>centro.</strong>
                </h1>

                <p>
                    Consulta la información registrada de este centro.
                </p>

            </div>

            <a
                href="{{ route('training_center.index') }}"
                class="centro-cancel"
            >
                <i class="bi bi-arrow-left"></i>
                Volver
            </a>

        </div>


        <div class="centro-detail-grid">

            <div class="centro-detail-item">

                <span>ID</span>

                <strong>
                    #{{ $centro->id }}
                </strong>

            </div>


            <div class="centro-detail-item">

                <span>NOMBRE</span>

                <strong>
                    {{ $centro->name }}
                </strong>

            </div>


            <div class="centro-detail-item">

                <span>UBICACIÓN</span>

                <strong>
                    {{ $centro->location }}
                </strong>

            </div>

        </div>


        <div class="centro-detail-actions">

            <a
                href="{{ route('training_center.edit', $centro->id) }}"
                class="centros-button"
            >
                <i class="bi bi-pencil"></i>
                Editar centro
            </a>

            <a
                href="{{ route('training_center.index') }}"
                class="centro-cancel"
            >
                Regresar
            </a>

        </div>

    </div>

</div>

@endsection