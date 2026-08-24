@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/profesores.css') }}">
@endsection

@section('content')

<div class="profesores-page">

    <div class="profesores-header">

        <div>
            <h1>Instructores</h1>

            <p>
                Administración de instructores registrados en el sistema.
            </p>
        </div>

        <a
            href="{{ route('teacher.create') }}"
            class="profesores-button"
        >
            <i class="bi bi-plus-circle"></i>
            Nuevo instructor
        </a>

    </div>


    <div class="profesores-table-card">

        <table>

            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                    <th>ÁREA</th>
                    <th>CENTRO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($teachers as $teacher)

                    <tr>

                        <td>
                            {{ $teacher->name }}
                        </td>

                        <td>
                            {{ $teacher->email }}
                        </td>

                        <td>
                            {{ $teacher->area_id }}
                        </td>

                        <td>
                            {{ $teacher->training_center_id }}
                        </td>

                        <td>

                            <div class="profesores-actions">

                                <a
                                    href="{{ route('teacher.show', $teacher->id) }}"
                                    class="profesor-action"
                                >
                                    <i class="bi bi-eye"></i>
                                    Mostrar
                                </a>

                                <a
                                    href="{{ route('teacher.edit', $teacher->id) }}"
                                    class="profesor-action"
                                >
                                    <i class="bi bi-pencil"></i>
                                    Editar
                                </a>

                                <form
                                    action="{{ route('teacher.destroy', $teacher->id) }}"
                                    method="POST"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="profesor-action"
                                        onclick="return confirm('¿Está seguro de eliminar este instructor?')"
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
                        <td colspan="5" class="profesores-empty">
                            No hay instructores registrados.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection