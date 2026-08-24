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
                    Editar <strong>instructor.</strong>
                </h1>

                <p>
                    Actualiza la información del instructor registrado.
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
            action="{{ route('teacher.update', $teacher->id) }}"
            method="POST"
        >

            @csrf
            @method('PUT')


            <div class="profesor-form-group">

                <label for="name">
                    Nombre
                </label>

                <input
                    type="text"
                    name="name"
                    id="name"
                    value="{{ old('name', $teacher->name) }}"
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
                    value="{{ old('email', $teacher->email) }}"
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

                    @foreach($areas as $area)

                        <option
                            value="{{ $area->id }}"
                            {{ $teacher->area_id == $area->id ? 'selected' : '' }}
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

                    @foreach($training_centers as $training_center)

                        <option
                            value="{{ $training_center->id }}"
                            {{ $teacher->training_center_id == $training_center->id ? 'selected' : '' }}
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
                    <i class="bi bi-check-lg"></i>
                    Actualizar
                </button>

            </div>

        </form>

    </div>

</div>

@endsection