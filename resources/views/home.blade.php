<x-layout>
    <x-slot:title>HOME</x-slot:title>
    <h1 class="m-3"> Mi pagina principal</h1>



    <div class="container seccion_intro">

        <div class="row justify-content-center align-items-center row-intro">
            <div class="col-md-6 col-sm-6 col-12 text-left mb-4 p-5 ">
                <h2>Bienvenidos a Desing Aylu</h2>
                <p class="primera-linea">Somos un grupo joven de diseñadores y profesionales que amamos lo que hacemos y buscamos que los
                    clientes amen nuestro trabajo.</p>
                    <p>Somos una agencia de diseño integral especializada en el diseño interdisciplinario.
                    una amplia gama de servicios: Branding, Diseño Gráfico, Digital, 3D, Motion Graphic, Producto, POP,
                    Fotografía y Video. Ponemos nuestra pasión y toda nuestra dedicación en cada proyecto, esforzándonos
                    y comprometiéndonos en lograr los mejores resultados; aprendiendo de cada proyecto y de cada
                    cliente.
                    Nuestro diferencial es que siempre estamos, siempre damos respuesta, estamos ¡SIEMPRE LISTOS!</p>

                <a href="{{ route('servicios.index') }}" class="btns">Servicios</a>


            </div>
            <div class="col-md-6 col-sm-6 col-12 text-left mb-4 p-3">
                <img src="/storage/imagenes/portada.png" alt="portada">

            </div>
        </div>
    </div>

    <div class="container seccion_puntos">
<h3>Nosotros</h3>
        <div class="row puntos_row">

            <div class="col-md-4 col-sm-6 col-12 text-left mb-4 p-3 col-puntos">

                <span>Somos creativos</span>
                <p>Buscamos soluciones creativas para cada proyecto, logrando que cada uno sea único.</p>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-left mb-4 p-3 col-puntos">
                <span>Somos Puntuales</span>
                <p>Trabajamos de manera sistémica y metodológica para cumplir siempre con los plazos
                    estipulados.</p>
            </div>
            <div class="col-md-4 col-sm-6 col-12 text-left mb-4 p-3 col-puntos">
                <span>Trabajamos en Equipo</span>
                <p>Una correcta comunicación con el cliente es esencial para lograr los mejores resultados,
                    formamos un
                    equipo de trabajo con el cliente.</p>
            </div>
        </div>
    </div>

    <div>
        <p class="contactanos">¡Nos apasiona el diseño!<br>
            Por eso solo lo hacemos de la mejor manera.</p>
    </div>

    <div class="container seccion_categoria">
        <h3>Categorias</h3>
        <div class="row justify-content-center categoria_row">
            @foreach ($categorias as $categoria)
                <div class="col-md-2 col-sm-6 col-12 categoria_icono text-center mb-4 p-3 col-categoria">
                    <a href="{{ route('view', ['categoria_id' => $categoria->categoria_id]) }}">
                        @if ($categoria->icono)
                            <img src="{{ asset('storage/' . $categoria->icono) }}" alt="{{ $categoria->name }}"
                                class="icono-categoria mb-3">
                        @endif
                    </a>
                    <h4>{{ $categoria->name }}</h4>
                    <p>{{ $categoria->intro }}</p>
                    <a href="{{ route('view', ['categoria_id' => $categoria->categoria_id]) }}" class="btns">Ver</a>
                </div>
            @endforeach
        </div>
    </div>


</x-layout>
