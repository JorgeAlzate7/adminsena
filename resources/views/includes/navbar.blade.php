<nav class="navbar navbar-expand-lg">

    <div class="container">

        <!-- LOGO -->
        <a class="navbar-brand" href="{{ route('home') }}">

            <img
                src="{{ asset('image/logo-del-sena-01.png') }}"
                alt="Logo SENA"
                class="logo-sena"
            >

            <span>SENA</span>

        </a>


        <!-- BOTÓN CELULAR -->
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Abrir menú"
        >

            <span class="navbar-toggler-icon"></span>

        </button>


        <!-- MENÚ -->
        <div
            class="collapse navbar-collapse"
            id="navbarSupportedContent"
        >

            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">


                <!-- INICIO -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('home') }}"
                    >
                        Inicio
                    </a>

                </li>


                <!-- OFERTAS -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('ofertas.index') }}"
                    >
                        Ofertas
                    </a>

                </li>


                <!-- QUIENES SOMOS -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('conocenos.index') }}"
                    >
                        ¿Quiénes somos?
                    </a>

                </li>


                <!-- CONTACTO -->

                <li class="nav-item">

                    <a
                        class="nav-link"
                        href="{{ route('contacto.index') }}"
                    >
                        Contacto
                    </a>

                </li>


                <!-- GESTIÓN -->

                <li class="nav-item dropdown">

                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Gestión
                    </a>


                    <ul class="dropdown-menu">


                        <li>
                            <a
                                class="dropdown-item"
                                href="{{ route('aprendice.index') }}"
                            >
                                Aprendices
                            </a>
                        </li>


                        <li>
                            <a
                                class="dropdown-item"
                                href="{{ route('course.index') }}"
                            >
                                Cursos
                            </a>
                        </li>


                        <li>
                            <a
                                class="dropdown-item"
                                href="{{ route('area.index') }}"
                            >
                                Áreas
                            </a>
                        </li>


                        <li>
                            <a
                                class="dropdown-item"
                                href="{{ route('computer.index') }}"
                            >
                                Computadores
                            </a>
                        </li>


                        <li>
                            <a
                                class="dropdown-item"
                                href="{{ route('teacher.index') }}"
                            >
                                Instructores
                            </a>
                        </li>


                        <li>
                            <a
                                class="dropdown-item"
                                href="{{ route('training_center.index') }}"
                            >
                                Centros de formación
                            </a>
                        </li>


                    </ul>

                </li>

            </ul>


            <!-- BUSCADOR -->

            <div class="search-container">

                <i class="bi bi-search"></i>

                <input
                    type="search"
                    placeholder="Buscar"
                    aria-label="Buscar"
                >

            </div>


        </div>

    </div>

</nav>