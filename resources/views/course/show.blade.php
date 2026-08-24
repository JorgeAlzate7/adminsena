@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/cursos.css') }}">
@endsection

@section('content')

<div class="cursos-page">

    <div class="curso-detail-card">

        <div class="curso-detail-header">

            <div>

                <span>INFORMACIÓN DEL CURSO</span>

                <h1>
                    Detalle del <strong>curso.</strong>
                </h1>

                <p>
                    Consulta la información registrada de este curso.
                </p>

            </div>

            <a
                href="{{ route('course.index') }}"
                class="curso-cancel"
            >
                <i class="bi bi-arrow-left"></i>
                Volver
            </a>

        </div>


        <div class="curso-detail-grid">

            <div class="curso-detail-item">

                <span>ID</span>

                <strong>
                    #{{ $curso->id }}
                </strong>

            </div>


            <div class="curso-detail-item">

                <span>NÚMERO DE CURSO</span>

                <strong>
                    {{ $curso->course_number }}
                </strong>

            </div>


            <div class="curso-detail-item">

                <span>DÍA</span>

                <strong>
                    {{ $curso->day }}
                </strong>

            </div>


            <div class="curso-detail-item">

                <span>ÁREA</span>

                <strong>
                    {{ $curso->area->name ?? 'Sin área' }}
                </strong>

            </div>


            <div class="curso-detail-item">

                <span>CENTRO DE FORMACIÓN</span>

                <strong>
                    {{ $curso->training_center->name ?? 'Sin centro' }}
                </strong>

            </div>

        </div>


        <div class="curso-detail-actions">

            <a
                href="{{ route('course.edit', $curso->id) }}"
                class="cursos-button"
            >
                <i class="bi bi-pencil"></i>
                Editar curso
            </a>

            <a
                href="{{ route('course.index') }}"
                class="curso-cancel"
            >
                Regresar
            </a>

        </div>

    </div>

</div>

@endsection