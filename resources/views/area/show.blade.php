@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/areas.css') }}">
@endsection

@section('content')

<div class="area-page">

    <div class="area-card">

        <div class="show-header">

            <div>

                <span class="area-subtitle">
                    ÁREAS DE FORMACIÓN
                </span>

                <h1>
                    Detalle del <strong>área.</strong>
                </h1>

            </div>

            <a
                href="{{ route('area.index') }}"
                class="area-cancel"
            >
                <i class="bi bi-arrow-left"></i>
                Volver
            </a>

        </div>


        <div class="show-info">

            <div class="show-item">

                <span>
                    ID DEL ÁREA
                </span>

                <strong>
                    #{{ $area->id }}
                </strong>

            </div>


            <div class="show-item">

                <span>
                    NOMBRE DEL ÁREA
                </span>

                <strong>
                    {{ $area->name }}
                </strong>

            </div>

        </div>


        <div class="show-actions">

            <a
                href="{{ route('area.edit', $area->id) }}"
                class="area-button"
            >
                <i class="bi bi-pencil"></i>
                Editar área
            </a>

            <a
                href="{{ route('area.index') }}"
                class="area-cancel"
            >
                Regresar a la lista
            </a>

        </div>

    </div>

</div>

@endsection