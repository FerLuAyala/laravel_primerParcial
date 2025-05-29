<x-layout>

    <h1 class="mb-3"> Servicios</h1>

    <div class="servicios">



        <div class="container servicios-intro p-4">
            @auth
                <a href="{{ route('servicios.create') }}" class="btn btn-success">Agregar servicio</a>

            @endauth
            <div class="row justify-content-center align-items-center row-intro">
                <div class="col-12 col-md-6 col-lg-4">

                    <img src="/storage/imagenes/servicio-portada.png" alt="portada" width="65%">
                </div>


                <div class="col-12 col-md-6 col-lg-4">
                    <h2>Que te ofrecemos</h2>
                    <p class="primera-linea">Aquí encontrarás todos los servicios propuestos por nuestra empresa que te
                        brindarán soluciones
                        integrales
                        para impulsar tu negocio, mejorar tu imagen y conectar eficazmente con tu audiencia.</p>
                    <p>
                        Desde diseño gráfico creativo hasta desarrollo web personalizado, nuestro compromiso es ofrecer
                        calidad,
                        innovación y atención personalizada en cada proyecto.
                    </p>
                </div>
            </div>
        </div>
        <div class="container p-4">
            <div class="row">
                @foreach ($servicios as $servicio)
                    <div class="col-12 col-md-6 col-lg-4 mb-4">
                        <div class="card h-100">
                            <h5 class="card-title">{{ $servicio->title }}</h5>
                            <div class="card-body">

                                @if ($servicio->img)
                                    <img src="{{ asset('storage/' . $servicio->img) }}" alt="{{ $servicio->title }}">
                                @endif

                                <p class="card-text">{{ $servicio->descripcion }}</p>


                            </div>
                            <p class="card-text"><strong>Precio:</strong> ${{ $servicio->price }}</p>
                            <a href="{{ route('view', ['categoria_id' => $servicio->categoria->categoria_id]) }}"
                                class="btns">Ver</a>
                            @auth

                                <a href="{{ route('servicios.edit', ['id' => $servicio->servicio_id]) }}"
                                    class="btn btn-secondary">Editar</a>
                                <form action="{{ route('servicios.destroy', ['id' => $servicio->servicio_id]) }}"
                                    method="POST"
                                    onsubmit="return confirm('¿Estás seguro de que deseas eliminar este servicio?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger w-100">Eliminar</button>
                                </form>

                            @endauth
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</x-layout>
