@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/centros.css') }}">
@endsection

@section('content')

<div class="centros-page">

    <div class="centros-header">

        <div>
            <h1>Centros de formación</h1>

            <p>
                Administración de los centros de formación registrados.
            </p>
        </div>

        <a
            href="{{ route('training_center.create') }}"
            class="centros-button"
        >
            <i class="bi bi-plus-circle"></i>
            Nuevo centro
        </a>

    </div>


    <div class="centros-table-card">

        <table>

            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>UBICACIÓN</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($training_centers as $training_center)

                    <tr>

                        <td>
                            {{ $training_center->name }}
                        </td>

                        <td>
                            {{ $training_center->location }}
                        </td>

                        <td>

                            <div class="centros-actions">

                                <a
                                    href="{{ route('training_center.show', $training_center->id) }}"
                                    class="centro-action"
                                >
                                    <i class="bi bi-eye"></i>
                                    Mostrar
                                </a>

                                <a
                                    href="{{ route('training_center.edit', $training_center->id) }}"
                                    class="centro-action"
                                >
                                    <i class="bi bi-pencil"></i>
                                    Editar
                                </a>

                                <form
                                    action="{{ route('training_center.destroy', $training_center->id) }}"
                                    method="POST"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="centro-action"
                                        onclick="return confirm('¿Está seguro de eliminar este centro de formación?')"
                                    >
                                        <i class="bi bi-trash"></i>
                                        Eliminar
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="3" class="centros-empty">
                            No hay centros de formación registrados.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection