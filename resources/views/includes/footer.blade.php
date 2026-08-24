<footer class="sena-footer">

    <div class="footer-container">

        <div class="footer-column footer-brand">

            <h3>ADMIN SENA</h3>

            <div class="footer-logo">
                <img src="{{ asset('image/logo-del-sena-01.png') }}" alt="Logo SENA">
            </div>

            <p>
                Sistema de Gestión de la Información
                para la administración de aprendices,
                cursos, instructores y recursos.
            </p>

        </div>


        <div class="footer-column">

            <h3>SISTEMA</h3>

            <a href="{{ url('/') }}">Inicio</a>

            <a href="{{ route('ofertas.index') }}">
                Ofertas
            </a>

            


        </div>


        <div class="footer-column">

            <h3>INFORMACIÓN</h3>

            <a href="{{ route('conocenos.index') }}">Misión</a>
            <a href="{{ route('conocenos.index') }}">Vision</a>
            <a href="{{ route('contacto.index') }}">Contacto</a>
            

        </div>


        <div class="footer-column footer-contact">

            <h3>CONTACTO</h3>

            <p>
                <i class="bi bi-envelope"></i>
                soporte@adminsena.com
            </p>

            <p>
                <i class="bi bi-geo-alt"></i>
                SENA Regional Cauca
            </p>

            <p>
                <i class="bi bi-building"></i>
                Centro de Comercio y Servicios
            </p>

            <p>
                <i class="bi bi-telephone"></i>
                Línea de atención SENA
            </p>

        </div>

    </div>


    <div class="footer-bottom">

        <div class="footer-bottom-content">

            <p>
                © {{ date('Y') }} Jorge Alzate
                Todos los derechos reservados.
            </p>

            <div class="footer-social">

                <a href="#" title="Facebook">
                    <i class="bi bi-facebook"></i>
                </a>

                <a href="#" title="Instagram">
                    <i class="bi bi-instagram"></i>
                </a>

                <a href="#" title="YouTube">
                    <i class="bi bi-youtube"></i>
                </a>

                <a href="#" title="LinkedIn">
                    <i class="bi bi-linkedin"></i>
                </a>

            </div>

        </div>

    </div>

</footer>


<button id="btnVolverArriba"
        class="btn-volver-arriba"
        title="Volver arriba">

    <i class="bi bi-chevron-up"></i>

</button>





<script>

const btnVolverArriba = document.getElementById("btnVolverArriba");

window.addEventListener("scroll", function () {

    if (window.scrollY > 300) {
        btnVolverArriba.classList.add("show");
    } else {
        btnVolverArriba.classList.remove("show");
    }

});

btnVolverArriba.addEventListener("click", function () {

    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });

});

</script>