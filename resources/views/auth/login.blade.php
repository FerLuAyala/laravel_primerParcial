<x-layout>
    <x-slot:title>Iniciar Sesión</x-slot:title>

    <h1 class="mb-3">Ingresar a tu cuenta</h1>
    <div class="servicios">
        <div class="logueo">
            <h2 class="mb-3 text-center">Ingresar a tu cuenta</h2>
            <form action="{{ route('auth.authenticate') }}" class="formLogueo" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>

                <button type="submit" class="btns">Ingresar</button>

            </form>
        </div>
    </div>
</x-layout>
