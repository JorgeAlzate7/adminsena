@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/computadores.css') }}">
@endsection

@section('content')

<div class="computadores-page">

    <div class="computer-detail-card">

        <div class="computer-detail-header">

            <div>

                <span>INFORMACIÓN DEL EQUIPO</span>

                <h1>
                    Detalle del <strong>computador.</strong>
                </h1>

                <p>
                    Consulta la información registrada del equipo.
                </p>

            </div>

            <a
                href="{{ route('computer.index') }}"
                class="computer-cancel"
            >
                <i class="bi bi-arrow-left"></i>
                Volver
            </a>

        </div>


        <div class="computer-detail-grid">

            <div class="computer-detail-item">

                <span>ID</span>

                <strong>
                    #{{ $computer->id }}
                </strong>

            </div>


            <div class="computer-detail-item">

                <span>NÚMERO DEL COMPUTADOR</span>

                <strong>
                    {{ $computer->number }}
                </strong>

            </div>


            <div class="computer-detail-item">

                <span>MARCA</span>

                <strong>
                    {{ $computer->brand }}
                </strong>

            </div>

        </div>


        <div class="computer-detail-actions">

            <a
                href="{{ route('computer.edit', $computer->id) }}"
                class="computadores-button"
            >
                <i class="bi bi-pencil"></i>
                Editar computador
            </a>

            <a
                href="{{ route('computer.index') }}"
                class="computer-cancel"
            >
                Regresar a la lista
            </a>

        </div>

    </div>

</div>

@endsection