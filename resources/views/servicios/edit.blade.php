<?php
/** @var \illuminat\Support\ViewErrorBag $errors */
/** @var \App\Models\Servicio $servicio */
?>


<x-layout>
    <x-slot:title>Editar servicios {{ $servicio->title }}</x-slot:title>

    <h1 class="mb-3">Editar servicios {{ $servicio->title }}</h1>
    <div class="servicios">


        <div class="editar">
            <h2>Editando servicio</h2>
            <span>({{ auth()->user()->email }}) Esta por Editar el servicio de {{ $servicio->title }} </span>

            @if ($errors->any())
                <div class="alert alert-danger">
                    La informacion ingresada contiene errorres
                </div>
            @endif

            <form action="{{ route('servicios.update', ['id' => $servicio->servicio_id]) }}" method="post">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Título</label>
                    <input type="text" id="title" name="title"
                        class="form-control @error('title') is-invalid @enderror"
                        value="{{ old('title', $servicio->title) }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea id="descripcion" name="descripcion" class="form-control @error('descripcion') is-invalid @enderror"
                        rows="4">{{ old('descripcion', $servicio->descripcion) }}</textarea>
                    @error('descripcion')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="categoria_id" class="form-label">Categoría</label>
                    <select id="categoria_id" name="categoria_id" class="form-control" required>
                        <option value="">Selecciona una categoría</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->categoria_id }}"
                                {{ old('categoria_id', $servicio->categoria_id) == $categoria->categoria_id ? 'selected' : '' }}>
                                {{ $categoria->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Precio</label>
                    <input type="number" id="price" name="price"
                        class="form-control @error('price') is-invalid @enderror" step="0.01" min="0"
                        value="{{ old('price', $servicio->price) }}">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>



                <button type="submit" class="btns">Guardar cambios</button>
            </form>
        </div>
    </div>
</x-layout>
