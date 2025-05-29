<x-layout>
    <x-slot:title>Categoria</x-slot:title>
    <h1 class="m-3"> Mis categorias</h1>
    <div class="container seccion_categoria p-4">
        <h3>Categorias</h3>
        <div class="row justify-content-center cat_row">
            @foreach ($categorias as $categoria)
                <div class="col-md-6 col-12 categoria_icono text-center mb-4 p-3 col-cat">
                    <a href="{{ route('view', ['categoria_id' => $categoria->categoria_id]) }}">
                        @if ($categoria->icono)
                            <img src="{{ asset('storage/' . $categoria->icono) }}" alt="{{ $categoria->name }}"
                                class="icono-categoria mb-3">
                        @endif
                    </a>
                    <h4>{{ $categoria->name }}</h4>
                    <p>{{ $categoria->intro }}</p>
                    <p>{{ $categoria->detalle }}</p>
                    <a href="{{ route('view', ['categoria_id' => $categoria->categoria_id]) }}" class="btns">Ver</a>
                </div>
            @endforeach
        </div>
    </div>


</x-layout>
