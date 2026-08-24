@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/cursos.css') }}">
@endsection

@section('content')

<div class="cursos-page">

    <div class="curso-form-card">

        <div class="curso-form-header">

            <div>

                <span>GESTIÓN DE CURSOS</span>

                <h1>
                    Nuevo <strong>curso.</strong>
                </h1>

                <p>
                    Registra un nuevo curso de formación.
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


        <form
            action="{{ route('course.store') }}"
            method="POST"
        >

            @csrf

            <div class="curso-form-group">

                <label for="course_number">
                    Número de curso
                </label>

                <input
                    type="number"
                    name="course_number"
                    id="course_number"
                    value="{{ old('course_number') }}"
                    placeholder="Número del curso"
                    required
                >

            </div>


            <div class="curso-form-group">

                <label for="day">
                    Día
                </label>

                <input
                    type="text"
                    name="day"
                    id="day"
                    value="{{ old('day') }}"
                    placeholder="Día de formación"
                    required
                >

            </div>


            <div class="curso-form-group">

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


            <div class="curso-form-group">

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


            <div class="curso-form-actions">

                <a
                    href="{{ route('course.index') }}"
                    class="curso-cancel"
                >
                    Cancelar
                </a>

                <button
                    type="submit"
                    class="cursos-button"
                >
                    <i class="bi bi-plus-circle"></i>
                    Crear curso
                </button>

            </div>

        </form>

    </div>

</div>

@endsection