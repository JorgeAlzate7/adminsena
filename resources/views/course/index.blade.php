@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/cursos.css') }}">
@endsection

@section('content')

<div class="cursos-page">

    <div class="cursos-header">

        <div>
            <h1>Cursos</h1>

            <p>
                Administración de los cursos de formación registrados.
            </p>
        </div>

        <a
            href="{{ route('course.create') }}"
            class="cursos-button"
        >
            <i class="bi bi-plus-circle"></i>
            Nuevo curso
        </a>

    </div>


    <div class="cursos-table-card">

        <table>

            <thead>
                <tr>
                    <th>NÚMERO</th>
                    <th>DÍA</th>
                    <th>ÁREA</th>
                    <th>CENTRO DE FORMACIÓN</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($courses as $course)

                    <tr>

                        <td>
                            {{ $course->course_number }}
                        </td>

                        <td>
                            {{ $course->day }}
                        </td>

                        <td>
                            {{ $course->area->name ?? 'Sin área' }}
                        </td>

                        <td>
                            {{ $course->training_center->name ?? 'Sin centro' }}
                        </td>

                        <td>

                            <div class="cursos-actions">

                                <a
                                    href="{{ route('course.show', $course->id) }}"
                                    class="curso-action"
                                >
                                    <i class="bi bi-eye"></i>
                                    Mostrar
                                </a>

                                <a
                                    href="{{ route('course.edit', $course->id) }}"
                                    class="curso-action"
                                >
                                    <i class="bi bi-pencil"></i>
                                    Editar
                                </a>

                                <form
                                    action="{{ route('course.destroy', $course->id) }}"
                                    method="POST"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="curso-action"
                                        onclick="return confirm('¿Está seguro de eliminar este curso?')"
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
                        <td colspan="5" class="cursos-empty">
                            No hay cursos registrados.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection