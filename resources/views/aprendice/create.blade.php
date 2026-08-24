@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/aprendice.css') }}">
@endsection

@section('content')

<div class="aprendice-page">

    <div class="aprendice-form-card">

        <div class="aprendice-form-header">

            <div>

                <span>GESTIÓN DE APRENDICES</span>

                <h1>
                    Nuevo <strong>aprendiz.</strong>
                </h1>

                <p>
                    Registra un nuevo aprendiz en el sistema.
                </p>

            </div>

            <a
                href="{{ route('aprendice.index') }}"
                class="aprendice-btn-cancel"
            >
                <i class="bi bi-arrow-left"></i>
                Volver
            </a>

        </div>


        <form
            action="{{ route('aprendice.store') }}"
            method="POST"
        >

            @csrf

            <div class="aprendice-form-group">

                <label for="name">
                    Nombre
                </label>

                <input
                    type="text"
                    name="name"
                    id="name"
                    value="{{ old('name') }}"
                    placeholder="Ingrese el nombre"
                    required
                >

            </div>


            <div class="aprendice-form-group">

                <label for="email">
                    Correo electrónico
                </label>

                <input
                    type="email"
                    name="email"
                    id="email"
                    value="{{ old('email') }}"
                    placeholder="Ingrese el correo"
                    required
                >

            </div>


            <div class="aprendice-form-group">

                <label for="cell_number">
                    Número celular
                </label>

                <input
                    type="text"
                    name="cell_number"
                    id="cell_number"
                    value="{{ old('cell_number') }}"
                    placeholder="Ingrese el número celular"
                    required
                >

            </div>


            <div class="aprendice-form-group">

                <label for="course_id">
                    Curso
                </label>

                <select
                    name="course_id"
                    id="course_id"
                >

                    <option value="">
                        Seleccione un curso
                    </option>

                    @foreach($courses as $course)

                        <option
                            value="{{ $course->id }}"
                            {{ old('course_id') == $course->id ? 'selected' : '' }}
                        >
                            {{ $course->course_number }}
                        </option>

                    @endforeach

                </select>

            </div>


            <div class="aprendice-form-group">

                <label for="computer_id">
                    Computador
                </label>

                <select
                    name="computer_id"
                    id="computer_id"
                >

                    <option value="">
                        Seleccione un computador
                    </option>

                    @foreach($computers as $computer)

                        <option
                            value="{{ $computer->id }}"
                            {{ old('computer_id') == $computer->id ? 'selected' : '' }}
                        >
                            {{ $computer->number }}
                        </option>

                    @endforeach

                </select>

            </div>


            <div class="aprendice-form-buttons">

                <a
                    href="{{ route('aprendice.index') }}"
                    class="aprendice-btn-cancel"
                >
                    Cancelar
                </a>

                <button
                    type="submit"
                    class="aprendice-btn-save"
                >
                    <i class="bi bi-check-circle"></i>
                    Guardar aprendiz
                </button>

            </div>

        </form>

    </div>

</div>

@endsection