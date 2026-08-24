@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/computadores.css') }}">
@endsection

@section('content')

<div class="computadores-page">

    <div class="computadores-header">

        <div>

            <h1>
                Computadores
            </h1>

            <p>
                Administración de computadores registrados en el sistema.
            </p>

        </div>

        <a
            href="{{ route('computer.create') }}"
            class="computadores-button"
        >
            <i class="bi bi-plus-circle"></i>
            Nuevo computador
        </a>

    </div>


    <div class="computadores-table-card">

        <table>

            <thead>

                <tr>
                    <th>NÚMERO</th>
                    <th>MARCA</th>
                    <th>ACCIONES</th>
                </tr>

            </thead>

            <tbody>

                @forelse ($computers as $computer)

                    <tr>

                        <td>
                            {{ $computer->number }}
                        </td>

                        <td>
                            {{ $computer->brand }}
                        </td>

                        <td>

                            <div class="computadores-actions">

                                <a
                                    href="{{ route('computer.show', $computer->id) }}"
                                    class="computer-action"
                                >
                                    <i class="bi bi-eye"></i>
                                    Mostrar
                                </a>

                                <a
                                    href="{{ route('computer.edit', $computer->id) }}"
                                    class="computer-action"
                                >
                                    <i class="bi bi-pencil"></i>
                                    Editar
                                </a>

                                <form
                                    action="{{ route('computer.destroy', $computer->id) }}"
                                    method="POST"
                                >

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="computer-action"
                                        onclick="return confirm('¿Está seguro de eliminar este computador?')"
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

                        <td colspan="3" class="computadores-empty">
                            No hay computadores registrados.
                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection