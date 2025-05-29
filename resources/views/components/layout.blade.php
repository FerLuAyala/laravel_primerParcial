<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }} :: Parcial 1</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid d-flex justify-content-between">

                <a class="navbar-brand" href="#">Ayala Fernanda</a>


                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar menú de navegación">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center p-3" id="navbarNav">

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <x-nav-link route="home">Home</x-nav-link>
                        </li>
                        <li class="nav-item">
                            <x-nav-link route="blogs.blog">Novedades</x-nav-link>
                        </li>
                        <li class="nav-item">
                            <x-nav-link route="servicios.index">Servicios</x-nav-link>
                        </li>
                        <li class="nav-item">
                            <x-nav-link route="categorias.index">Categorias</x-nav-link>
                        </li>
                    </ul>
                </div>


                <div class="d-flex align-items-center">
                    @auth
                        <form action="{{ url('/cerrar-sesion') }}" method="post" class="mb-0">
                            @csrf
                            <button type="submit" class="btns">
                                Cerrar Sesión ({{ auth()->user()->email }})
                            </button>
                        </form>
                    @else
                        <a href="{{ route('auth.login') }}" class="btns">
                            Iniciar Sesión
                        </a>
                    @endauth
                </div>

            </div>
        </nav>

        <main>
            <h1>Mi parcial</h1>

            @if (session()->has('feedback.message'))
                <div class="alert alert-{{ session('feedback.type', 'success') }} alert-dismissible fade show"
                    role="alert" id="flash-message">
                    {!! session('feedback.message') !!}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>



                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        setTimeout(function() {
                            const alert = bootstrap.Alert.getOrCreateInstance(document.getElementById('flash-message'));
                            alert.close();
                        }, 4000);
                    });
                </script>
            @endif

            {{ $slot }}
        </main>

        <footer class="footer text-bg-dark text-center p-5">
            <p>Primer Parcial Ayala fernanda</p>
        </footer>
    </div>


    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
