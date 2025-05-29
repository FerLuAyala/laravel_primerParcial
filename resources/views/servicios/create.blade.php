<x-layout>
    <x-slot:title>Agregar Servicio</x-slot:title>

    <h1 class="mb-3">Agregar Servicio</h1>



    <div class="servicios">
        <div class="agregar">
            <h2>Agregando servicio</h2>

            <span>({{ auth()->user()->email }}) Recuerde completar todos los campos para poder agregar los servicios
            </span>
         <form action="{{ route('servicios.store') }}" method="POST" enctype="multipart/form-data">


                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Título</label>
                    <input type="text" id="title" name="title" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripcion</label>
                    <textarea id="descripcion" name="descripcion" class="form-control"></textarea>
                </div>


                <div class="mb-3">
                    <label for="categoria_id" class="form-label">Categoría</label>
                    <select id="categoria_id" name="categoria_id" class="form-control" required>
                        <option value="">Selecciona una categoría</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->categoria_id }}"
                                {{ old('categoria_id') == $categoria->categoria_id ? 'selected' : '' }}>
                                {{ $categoria->name }}
                            </option>
                        @endforeach
                    </select>
                </div>


                <div class="mb-3">
                    <label for="price" class="form-label">Precio</label>
                    <input type="number" id="price" name="price" class="form-control" step="0.01">
                </div>

                <div class="mb-3">
                    <label for="img" class="form-label">Imagen</label>
                    <input type="file" id="img" name="img" class="form-control">
                </div>

                <button type="submit" class="btns">Agregar Servicio</button>
            </form>
        </div>
    </div>
</x-layout>
