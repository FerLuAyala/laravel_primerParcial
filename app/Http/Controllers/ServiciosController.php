<?php

namespace App\Http\Controllers;
use App\Models\Servicio;
use App\Models\Categoria;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index()
   {
   // return view('servicios.index');
    $allServicios = Servicio::with(['categoria'])->get();
   // dd($allServicios);
    return view('servicios.index' , ['servicios' => $allServicios]);
   }

public function create(){
    return view('servicios.create', [
        'categorias' => Categoria::all(),
    ]);
}

public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'price' => 'required|numeric',
        'categoria_id' => 'required|exists:categorias,categoria_id',
        'img' => 'nullable|image|max:2048'

    ],
[
    'title.required' =>'Debe ingresar titulo',
    'title.min' => 'El titulo debe tener al menos :min caracteres',
    'descripcion' => 'Debe copmpletar este campo con la descripcion del servicio',
    'categoria_id' => 'selecione a que categoria pertenece el servicio',
    'img.image' => 'El archivo debe ser una imagen válida (jpg, png, etc.)',
        'img.max' => 'La imagen no debe superar los 2MB',
]
);

    // Extraer solo los campos necesarios
    $data = $request->only(['title', 'descripcion', 'price', 'categoria_id']);

    // Manejar subida de archivo si existe
    if ($request->hasFile('img')) {
        $data['img'] = $request->file('img')->store('imagenes','public');
    }

    // Crear el servicio
    Servicio::create($data);

    return redirect()
        ->route('servicios.index')
        ->with('feedback.message', 'Servicio creado correctamente');
}

public function destroy(int $id)
{
    $servicio = Servicio::findOrFail($id);
    $servicio->delete();

        return redirect()
    ->route('servicios.index')
    ->with('feedback.message', 'Este servicio <b>' . $servicio->title . '</b><br> se eliminó exitosamente')
    ->with('feedback.type', 'success');
}

public function edit(int $id)

{
    $servicio = Servicio::findOrFail($id);
            $categorias = Categoria::all();

    return view('servicios.edit', [

        'servicio' => Servicio::findOrFail($id),
        'categorias' => $categorias,
    ]);
}

public function update(Request $request, int $id)
{
     $request->validate([
        'title' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'price' => 'required|numeric',
        'categoria_id' => 'required|exists:categorias,categoria_id',

    ],
    [
    'title.requiered' =>'Debe ingresar titulo',
    'title.min' => 'El titulo debe tener al menos :min caracteres',
    'descripcion' => 'Debe copmpletar este campo con la descripcion del servicio',
    'categoria_id' =>'selecione a que categoria pertenece el servicio',
    ]);

 $servicio = Servicio::findOrFail($id);

 $servicio->update($request ->all());

 $servicio->save();

 return redirect()
 ->route('servicios.index')
 ->with('feedback.message', 'El Servicio <b>' . e($servicio->title) . '</br> se actualizó correctamente');

}
}
