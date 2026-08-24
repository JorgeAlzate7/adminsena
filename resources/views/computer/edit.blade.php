@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/computadores.css') }}">
@endsection

@section('content')

<div class="computadores-page">

    <div class="computador-form-card">

        <div class="computador-form-header">

            <div>
                <span>GESTIÓN DE EQUIPOS</span>

                <h1>
                    Editar <strong>computador.</strong>
                </h1>

                <p>
                    Actualiza la información del computador registrado.
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


        <form
            action="{{ route('computer.update', $computer->id) }}"
            method="POST"
        >

            @csrf
            @method('PUT')

            <div class="computer-form-group">

                <label for="number">
                    Número del computador
                </label>

                <input
                    type="number"
                    name="number"
                    id="number"
                    value="{{ old('number', $computer->number) }}"
                    required
                >

            </div>


            <div class="computer-form-group">

                <label for="brand">
                    Marca
                </label>

                <input
                    type="text"
                    name="brand"
                    id="brand"
                    value="{{ old('brand', $computer->brand) }}"
                    required
                >

            </div>


            <div class="computer-form-actions">

                <a
                    href="{{ route('computer.index') }}"
                    class="computer-cancel"
                >
                    Cancelar
                </a>

                <button
                    type="submit"
                    class="computadores-button"
                >
                    <i class="bi bi-check-lg"></i>
                    Actualizar
                </button>

            </div>

        </form>

    </div>

</div>

@endsection