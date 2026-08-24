@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/profesores.css') }}">
@endsection

@section('content')

<div class="profesores-page">

    <div class="profesor-detail-card">

        <div class="profesor-detail-header">

            <div>

                <span>INFORMACIÓN DEL INSTRUCTOR</span>

                <h1>
                    Detalle del <strong>instructor.</strong>
                </h1>

                <p>
                    Consulta la información registrada del instructor.
                </p>

            </div>

            <a
                href="{{ route('teacher.index') }}"
                class="profesor-cancel"
            >
                <i class="bi bi-arrow-left"></i>
                Volver
            </a>

        </div>


        <div class="profesor-detail-grid">

            <div class="profesor-detail-item">

                <span>ID</span>

                <strong>
                    #{{ $profesor->id }}
                </strong>

            </div>


            <div class="profesor-detail-item">

                <span>NOMBRE</span>

                <strong>
                    {{ $profesor->name }}
                </strong>

            </div>


            <div class="profesor-detail-item">

                <span>CORREO</span>

                <strong>
                    {{ $profesor->email }}
                </strong>

            </div>


            <div class="profesor-detail-item">

                <span>ÁREA</span>

                <strong>
                    {{ $profesor->area_id }}
                </strong>

            </div>


            <div class="profesor-detail-item">

                <span>CENTRO DE FORMACIÓN</span>

                <strong>
                    {{ $profesor->training_center_id }}
                </strong>

            </div>

        </div>


        <div class="profesor-detail-actions">

            <a
                href="{{ route('teacher.edit', $profesor->id) }}"
                class="profesores-button"
            >
                <i class="bi bi-pencil"></i>
                Editar instructor
            </a>

            <a
                href="{{ route('teacher.index') }}"
                class="profesor-cancel"
            >
                Regresar
            </a>

        </div>

    </div>

</div>

@endsection