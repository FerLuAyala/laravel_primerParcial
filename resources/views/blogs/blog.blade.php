<x-layout>
    <x-slot:title>Novedades</x-slot:title>
    <h1 class="m-3"> Mis Novedades</h1>


    @foreach ($blogs as $blog)
        <div class="container servicios-intro p-4">
            <div class="row justify-content-center align-items-center row-intro">
                <div class="col-12 col-md-6 col-lg-4">
                    <img src="/storage/imagenes/servicio-portada.png" alt="portada" width="65%">
                </div>
                <div class="col-12 col-lg-8">
                    <h2>{{ $blog->title }}</h2>
                </div>
            </div>
        </div>

        <div class="container blog-intro">

            <div class="row">

                <div class="col-12 col-lg-6">
                    <p class="contactanos">{{ $blog->subtitle }}</p>
                </div>
                <div class="col-12 col-lg-6 img-muestra">

                    @if ($blog->img)

                        <img src="{{ asset('storage/' . $blog->img) }}" alt="{{ $blog->title }}">
                    @else

                    @endif


                </div>
            </div>
        </div>
        <div class="container p-4 blog-uno">

            <div class="row justify-content-center align-items-center row-intro">
                <div class="col-12 col-lg-4">
                    <p class="numeracion">1</p>
                </div>
                <div class="col-12 col-lg-4">

                    @if ($blog->icono1)
                        <img src="{{ asset('storage/' . $blog->icono1) }}" alt="{{ $blog->title }}">
                    @endif

                </div>
                <div class="col-12 col-lg-4">
                    <p>{{ $blog->texto1 }}</p>
                </div>

            </div>
        </div>


        <div class="container p-4 blog-dos">

            <div class="row justify-content-center align-items-center row-intro">
                <div class="col-12 col-lg-4">
                    <p class="numeracion">2</p>
                </div>

                <div class="col-12 col-lg-4">
                    <p>{{ $blog->texto2 }}</p>
                </div>

                 <div class="col-12 col-lg-4">

                    @if ($blog->icono2)
                        <img src="{{ asset('storage/' . $blog->icono2) }}" alt="{{ $blog->title }}">
                    @endif

                </div>

            </div>
        </div>

        <div class="container p-4 blog-dos">

            <div class="row justify-content-center align-items-center row-intro">
                <div class="col-12 col-lg-4">
                    <p class="numeracion">3</p>
                </div>
                <div class="col-12 col-lg-4">

                    @if ($blog->icono3)
                        <img src="{{ asset('storage/' . $blog->icono3) }}" alt="{{ $blog->title }}">
                    @endif

                </div>
                <div class="col-12 col-lg-4">
                    <p>{{ $blog->texto3 }}</p>
                </div>

            </div>
        </div>
    @endforeach


</x-layout>
