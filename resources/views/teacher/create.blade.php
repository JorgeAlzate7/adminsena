@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/profesores.css') }}">
@endsection

@section('content')

<div class="profesores-page">

    <div class="profesor-form-card">

        <div class="profesor-form-header">

            <div>

                <span>GESTIÓN DE INSTRUCTORES</span>

                <h1>
                    Nuevo <strong>instructor.</strong>
                </h1>

                <p>
                    Registra un nuevo instructor en el sistema.
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


        <form
            action="{{ route('teacher.store') }}"
            method="POST"
        >

            @csrf

            <div class="profesor-form-group">

                <label for="name">
                    Nombre
                </label>

                <input
                    type="text"
                    name="name"
                    id="name"
                    value="{{ old('name') }}"
                    placeholder="Nombre del instructor"
                    required
                >

            </div>


            <div class="profesor-form-group">

                <label for="email">
                    Correo electrónico
                </label>

                <input
                    type="email"
                    name="email"
                    id="email"
                    value="{{ old('email') }}"
                    placeholder="correo@ejemplo.com"
                    required
                >

            </div>


            <div class="profesor-form-group">

                <label for="area_id">
                    Área
                </label>

                <select
                    name="area_id"
                    id="area_id"
                    required
                >

                    <option value="">
                        Seleccione un área
                    </option>

                    @foreach($areas as $area)

                        <option
                            value="{{ $area->id }}"
                            {{ old('area_id') == $area->id ? 'selected' : '' }}
                        >
                            {{ $area->name }}
                        </option>

                    @endforeach

                </select>

            </div>


            <div class="profesor-form-group">

                <label for="training_center_id">
                    Centro de formación
                </label>

                <select
                    name="training_center_id"
                    id="training_center_id"
                    required
                >

                    <option value="">
                        Seleccione un centro de formación
                    </option>

                    @foreach($training_centers as $training_center)

                        <option
                            value="{{ $training_center->id }}"
                            {{ old('training_center_id') == $training_center->id ? 'selected' : '' }}
                        >
                            {{ $training_center->name }}
                        </option>

                    @endforeach

                </select>

            </div>


            <div class="profesor-form-actions">

                <a
                    href="{{ route('teacher.index') }}"
                    class="profesor-cancel"
                >
                    Cancelar
                </a>

                <button
                    type="submit"
                    class="profesores-button"
                >
                    <i class="bi bi-plus-circle"></i>
                    Crear instructor
                </button>

            </div>

        </form>

    </div>

</div>

@endsection