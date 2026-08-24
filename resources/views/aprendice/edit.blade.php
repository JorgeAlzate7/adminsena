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
                    Editar <strong>aprendiz.</strong>
                </h1>

                <p>
                    Modifica la información del aprendiz.
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
            action="{{ route('aprendice.update', $aprendice) }}"
            method="POST"
        >

            @csrf
            @method('PUT')


            <div class="aprendice-form-group">

                <label for="name">
                    Nombre
                </label>

                <input
                    type="text"
                    name="name"
                    id="name"
                    value="{{ old('name', $aprendice->name) }}"
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
                    value="{{ old('email', $aprendice->email) }}"
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
                    value="{{ old('cell_number', $aprendice->cell_number) }}"
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
                            {{ $aprendice->course_id == $course->id ? 'selected' : '' }}
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
                            {{ $aprendice->computer_id == $computer->id ? 'selected' : '' }}
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
                    Actualizar aprendiz
                </button>

            </div>

        </form>

    </div>

</div>

@endsection