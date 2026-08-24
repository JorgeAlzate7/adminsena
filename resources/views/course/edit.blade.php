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
                    Editar <strong>curso.</strong>
                </h1>

                <p>
                    Actualiza la información del curso registrado.
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
            action="{{ route('course.update', $course->id) }}"
            method="POST"
        >

            @csrf
            @method('PUT')


            <div class="curso-form-group">

                <label for="course_number">
                    Número de curso
                </label>

                <input
                    type="number"
                    name="course_number"
                    id="course_number"
                    value="{{ old('course_number', $course->course_number) }}"
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
                    value="{{ old('day', $course->day) }}"
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

                    @foreach($areas as $area)

                        <option
                            value="{{ $area->id }}"
                            {{ $course->area_id == $area->id ? 'selected' : '' }}
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

                    @foreach($training_centers as $training_center)

                        <option
                            value="{{ $training_center->id }}"
                            {{ $course->training_center_id == $training_center->id ? 'selected' : '' }}
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
                    <i class="bi bi-check-lg"></i>
                    Actualizar
                </button>

            </div>

        </form>

    </div>

</div>

@endsection