@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/areas.css') }}">
@endsection

@section('content')

<div class="areas-page">

    <div class="areas-header">

        <div>
            <h1>Áreas de formación</h1>

            <p>
                Administración de las áreas de formación registradas.
            </p>
        </div>

        <a href="{{ route('areas.create') }}" class="areas-button">
            <i class="bi bi-plus-circle"></i>
            Nueva área
        </a>

    </div>

    <div class="areas-table-card">

        <table>

            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>

            <tbody>

                @foreach ($areas as $area)

                    <tr>

                        <td>
                            {{ $area->name }}
                        </td>

                        <td>

                            <div class="areas-actions">

                                <a
                                    href="{{ route('area.show', $area->id) }}"
                                    class="area-action"
                                >
                                    <i class="bi bi-eye"></i>
                                    Mostrar
                                </a>

                                <a
                                    href="{{ route('area.edit', $area->id) }}"
                                    class="area-action"
                                >
                                    <i class="bi bi-pencil"></i>
                                    Editar
                                </a>

                                <form
                                    action="{{ route('area.destroy', $area->id) }}"
                                    method="POST"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="area-action"
                                        onclick="return confirm('¿Está seguro de eliminar esta área?')"
                                    >
                                        <i class="bi bi-trash"></i>
                                        Eliminar
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection