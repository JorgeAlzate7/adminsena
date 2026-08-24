@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/aprendice.css') }}">
@endsection

@section('content')

<div class="aprendice-page">

    <div class="aprendice-detail-card">

        <div class="aprendice-header">

            <div>

                <span class="aprendice-subtitle">
                    INFORMACIÓN DEL APRENDIZ
                </span>

                <h1>
                    Detalle del <strong>aprendiz.</strong>
                </h1>

                <p>
                    Consulta la información registrada de este aprendiz.
                </p>

            </div>

            

        </div>


        <div class="aprendice-detail-profile">

            <div class="aprendice-detail-avatar">
                {{ strtoupper(substr($aprendiz->name, 0, 1)) }}
            </div>

            <div>

                <h2>
                    {{ $aprendiz->name }}
                </h2>

                <p>
                    Aprendiz SENA
                </p>

            </div>

        </div>


        <div class="aprendice-detail-grid">

            <div class="aprendice-detail-item">

                <div class="aprendice-detail-icon">
                    <i class="bi bi-hash"></i>
                </div>

                <div>
                    <span>ID</span>
                    <strong>#{{ $aprendiz->id }}</strong>
                </div>

            </div>


            <div class="aprendice-detail-item">

                <div class="aprendice-detail-icon">
                    <i class="bi bi-envelope"></i>
                </div>

                <div>
                    <span>Correo electrónico</span>
                    <strong>{{ $aprendiz->email }}</strong>
                </div>

            </div>


            <div class="aprendice-detail-item">

                <div class="aprendice-detail-icon">
                    <i class="bi bi-telephone"></i>
                </div>

                <div>
                    <span>Número celular</span>
                    <strong>{{ $aprendiz->cell_number }}</strong>
                </div>

            </div>


            <div class="aprendice-detail-item">

                <div class="aprendice-detail-icon">
                    <i class="bi bi-mortarboard"></i>
                </div>

                <div>
                    <span>Curso</span>

                    <strong>
                        {{ $aprendiz->course->course_number ?? 'Sin curso' }}
                    </strong>

                    @if($aprendiz->course)
                        <small>
                            {{ $aprendiz->course->day ?? '' }}
                        </small>
                    @endif

                </div>

            </div>


            <div class="aprendice-detail-item">

                <div class="aprendice-detail-icon">
                    <i class="bi bi-pc-display"></i>
                </div>

                <div>
                    <span>Computador</span>

                    <strong>
                        {{ $aprendiz->computer->number ?? 'Sin computador' }}
                    </strong>

                </div>

            </div>

        </div>


        <div class="aprendice-detail-actions">

            <a
                href="{{ route('aprendice.edit', $aprendiz->id) }}"
                class="aprendice-btn-save"
            >
                <i class="bi bi-pencil"></i>
                Editar aprendiz
            </a>

            <a
                href="{{ route('aprendice.index') }}"
                class="aprendice-btn-cancel"
            >
                Regresar
            </a>

        </div>

    </div>

</div>

@endsection