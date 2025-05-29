<x-layout>
    <x-slot:title>Detalles de la categoría {{ $categoria->name }}</x-slot:title>

    <h1 class="titulo-categoria">{{ $categoria->name }}</h1>

    <div class="container seccion_intro p-4">
        <div class="row justify-content-center align-items-center row-intro">

            <div class="col-12 col-md-6 col-lg-4">
                <h2 class="titulo-categoria">{{ $categoria->name }}</h2>
                <p class="primera-linea">{{ $categoria->subtitle }}</p>

            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <p>{{ $categoria->detalle }}</p>

            </div>
        </div>

    </div>
    <div class="servicios">
        <div class="container servicios-lista p-5">
            <h3> Servicios de {{ $categoria->name }}</h3>


          @foreach ($categoria->servicios as $servicio)
    <div class="card mb-3 " >
        <div class="row g-0 justify-content-center align-items-center">
            @if ($servicio->img)
                <div class="col-md-4">
                    <img src="{{ asset('storage/' . $servicio->img) }}" class="img-fluid rounded-start" alt="{{ $servicio->title }}">
                </div>
            @endif
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $servicio->title }}</h5>
                    <p class="card-text">{{ $servicio->descripcion }}</p>
                    <p class="card-text"><small class="text-muted"><strong>Precio:</strong> ${{ number_format($servicio->price, 2) }}</small></p>
                </div>
            </div>
        </div>
    </div>
@endforeach

        </div>
    </div>
</x-layout>
