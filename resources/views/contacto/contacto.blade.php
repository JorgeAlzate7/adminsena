@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/contacto.css') }}">
@endsection

@section('content')

<div class="contacto-page">

    <div class="contacto-header">
        <span>ATENCIÓN SENA</span>

        <h1>
            Estamos para <strong>ayudarte.</strong>
        </h1>

        <p>
            ¿Tienes alguna pregunta? Comunícate con nosotros
            a través de los siguientes medios.
        </p>
    </div>

    <div class="contacto-grid">

        <!-- INFORMACIÓN -->
        <div class="contacto-card">

            <div class="contacto-card-title">
                <div class="contacto-icon">
                    <i class="bi bi-info-circle"></i>
                </div>

                <h2>Información de contacto</h2>
            </div>

            <div class="contacto-dato">
                <i class="bi bi-geo-alt-fill"></i>

                <div>
                    <strong>Ubicación</strong>
                    <p>Centro de Formación SENA</p>
                </div>
            </div>

            <div class="contacto-dato">
                <i class="bi bi-telephone-fill"></i>

                <div>
                    <strong>Teléfono</strong>
                    <p>+57 601 546 1500</p>
                </div>
            </div>

            <div class="contacto-dato">
                <i class="bi bi-envelope-fill"></i>

                <div>
                    <strong>Correo</strong>
                    <p>contacto@adminSena.com</p>
                </div>
            </div>

            <div class="contacto-dato">
                <i class="bi bi-clock-fill"></i>

                <div>
                    <strong>Horario</strong>
                    <p>Lunes a viernes de 8:00 AM a 5:00 PM</p>
                </div>
            </div>

        </div>

        <!-- FORMULARIO -->
        <div class="contacto-card">

            <div class="contacto-card-title">
                <div class="contacto-icon">
                    <i class="bi bi-chat-dots"></i>
                </div>

                <h2>Envíanos un mensaje</h2>
            </div>

            <form>

                <div class="contacto-input">
                    <label>Nombre</label>

                    <input
                        type="text"
                        placeholder="Escribe tu nombre"
                    >
                </div>

                <div class="contacto-input">
                    <label>Correo electrónico</label>

                    <input
                        type="email"
                        placeholder="correo@ejemplo.com"
                    >
                </div>

                <div class="contacto-input">
                    <label>Mensaje</label>

                    <textarea
                        rows="5"
                        placeholder="Escribe tu mensaje"
                    ></textarea>
                </div>

                <button type="submit" class="contacto-button">
                    <i class="bi bi-send-fill"></i>
                    Enviar mensaje
                </button>

            </form>

        </div>

    </div>

</div>

@endsection