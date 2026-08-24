@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/areas.css') }}">
@endsection

@section('content')

<div class="area-page">

    <div class="area-card">

        <span class="area-subtitle">
            ÁREAS DE FORMACIÓN
        </span>

        <h1>
            Editar <strong>área</strong>
        </h1>

        <p class="area-description">
            Actualiza el nombre del área de formación.
        </p>

        <form
            action="{{ route('area.update', $area->id) }}"
            method="POST"
        >

            @csrf
            @method('PUT')

            <div class="form-group">

                <label for="name">
                    Nombre del área
                </label>

                <input
                    type="text"
                    name="name"
                    id="name"
                    value="{{ old('name', $area->name) }}"
                    placeholder="Ejemplo: Tecnología"
                    required
                >

                @error('name')
                    <small class="error">
                        {{ $message }}
                    </small>
                @enderror

            </div>

            <div class="area-edit-buttons">

                <a
                    href="{{ route('area.index') }}"
                    class="area-cancel"
                >
                    <i class="bi bi-arrow-left"></i>
                    Cancelar
                </a>

                <button
                    type="submit"
                    class="area-button"
                >
                    Actualizar
                    <i class="bi bi-check-lg"></i>
                </button>

            </div>

        </form>

    </div>

</div>

@endsection