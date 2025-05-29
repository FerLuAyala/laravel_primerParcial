<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])-> name('home');

Route::get('/blogs/blogs', [\App\Http\Controllers\BlogsController::class, 'blog'])
    ->name('blogs.blog');



Route::get('/servicios/servicios', [\App\Http\Controllers\ServiciosController::class, 'index'])
-> name('servicios.index');


Route::get('/categorias/categorias', [\App\Http\Controllers\CategoriasController::class, 'index'])
-> name('categorias.index');


Route::get('servicios/publicar', [\App\Http\Controllers\ServiciosController::class, 'create'])
-> name('servicios.create')
-> middleware('auth');

Route::post('servicios/publicar', [\App\Http\Controllers\ServiciosController::class, 'store'])
-> name('servicios.store')
-> middleware('auth');

Route::get('/{categoria_id}', [\App\Http\Controllers\HomeController::class, 'view'])
-> name('view')

-> whereNumber('categoria_id');

Route::get('iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'login'])
-> name('auth.login');


Route::post('iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'authenticate'])
-> name('auth.authenticate');


Route::post('cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logout'])
-> name('auth.logout');


Route::get('servicios/{id}eliminar', [\App\Http\Controllers\ServiciosController::class, 'delete'])
-> name('servicios.delete')
-> middleware('auth');

Route::delete('servicios/{id}eliminar', [\App\Http\Controllers\ServiciosController::class, 'destroy'])
-> name('servicios.destroy')
-> middleware('auth');

Route::get('servicios/{id}/editar', [\App\Http\Controllers\ServiciosController::class, 'edit'])
-> name('servicios.edit')
-> middleware('auth');

Route::put('servicios/{id}/editar', [\App\Http\Controllers\ServiciosController::class, 'update'])
-> name('servicios.update')
-> middleware('auth');

?>
