@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/aprendice.css') }}">
@endsection

@section('content')

<div class="aprendice-page">

    <div class="aprendice-header">

        <div>
            <h1>Aprendices</h1>

            <p>
                Administración de aprendices registrados en el sistema.
            </p>
        </div>

        <a
            href="{{ route('aprendice.create') }}"
            class="aprendice-btn-primary"
        >
            <i class="bi bi-plus-circle"></i>
            Nuevo aprendiz
        </a>

    </div>


    <div class="aprendice-card">

        <table class="aprendice-table">

            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>EMAIL</th>
                    <th>CELULAR</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>

            <tbody>

                @forelse ($aprendices as $aprendice)

                    <tr>

                        <td>
                            {{ $aprendice->name }}
                        </td>

                        <td>
                            {{ $aprendice->email }}
                        </td>

                        <td>
                            {{ $aprendice->cell_number }}
                        </td>

                        <td>

                            <div class="aprendice-actions">

                                <a
                                    href="{{ route('aprendice.show', $aprendice->id) }}"
                                    class="aprendice-btn"
                                >
                                    <i class="bi bi-eye"></i>
                                    Mostrar
                                </a>

                                <a
                                    href="{{ route('aprendice.edit', $aprendice->id) }}"
                                    class="aprendice-btn"
                                >
                                    <i class="bi bi-pencil"></i>
                                    Editar
                                </a>

                                <form
                                    action="{{ route('aprendice.destroy', $aprendice->id) }}"
                                    method="POST"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="aprendice-btn"
                                        onclick="return confirm('¿Está seguro de eliminar este aprendiz?')"
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
                        <td colspan="4" class="aprendice-empty">
                            No hay aprendices registrados.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection