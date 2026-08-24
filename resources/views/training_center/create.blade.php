@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/centros.css') }}">
@endsection

@section('content')

<div class="centros-page">

    <div class="centro-form-card">

        <div class="centro-form-header">

            <div>

                <span>FORMACIÓN SENA</span>

                <h1>
                    Nuevo <strong>centro.</strong>
                </h1>

                <p>
                    Registra un nuevo centro de formación.
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


        <form
            action="{{ route('training_center.store') }}"
            method="POST"
        >

            @csrf

            <div class="centro-form-group">

                <label for="name">
                    Nombre
                </label>

                <input
                    type="text"
                    name="name"
                    id="name"
                    value="{{ old('name') }}"
                    placeholder="Nombre del centro"
                    required
                >

            </div>


            <div class="centro-form-group">

                <label for="location">
                    Ubicación
                </label>

                <input
                    type="text"
                    name="location"
                    id="location"
                    value="{{ old('location') }}"
                    placeholder="Ubicación del centro"
                    required
                >

            </div>


            <div class="centro-form-actions">

                <a
                    href="{{ route('training_center.index') }}"
                    class="centro-cancel"
                >
                    Cancelar
                </a>

                <button
                    type="submit"
                    class="centros-button"
                >
                    <i class="bi bi-plus-circle"></i>
                    Crear centro
                </button>

            </div>

        </form>

    </div>

</div>

@endsection