@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/areas.css') }}">
@endsection

@section('content')

<div class="area-page">

    <div class="area-card">

        <span class="area-subtitle">
            ADMINISTRACIÓN
        </span>

        <h1>
            Crear <strong>área</strong>
        </h1>

        <p class="area-description">
            Registra una nueva área para organizar
            las ofertas de formación.
        </p>


        <form
            action="{{ route('area.store') }}"
            method="POST"
            enctype="multipart/form-data"
        >

            @csrf

            <div class="form-group">

                <label for="name">
                    Nombre del área
                </label>

                <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Ej: Tecnología"
                    value="{{ old('name') }}"
                    required
                >

                @error('name')
                    <small class="error">
                        {{ $message }}
                    </small>
                @enderror

            </div>


            <button type="submit" class="area-button">

                Crear área

                <i class="bi bi-arrow-right"></i>

            </button>

        </form>

    </div>

</div>

@endsection