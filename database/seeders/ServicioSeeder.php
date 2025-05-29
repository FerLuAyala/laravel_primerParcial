<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('servicios')->insert([
            [
                'title' => 'Identidad Visual & Corporativa',
                'descripcion' => 'Diseñamos marcas desde cero, construyendo su identidad visual y conceptual. Creamos estrategias sólidas que reflejan tus valores, conectan con tu público y diferencian tu marca en el mercado.',
                'price' => 15000.00,
                'img' => 'imagenes/identidad_visual.jpg',
                'categoria_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Desarrollo Web',
                'descripcion' => 'Diseñamos y desarrollamos sitios web funcionales, modernos y responsivos, optimizados para ofrecer la mejor experiencia de usuario. Cada proyecto es personalizado para reflejar la identidad de tu marca y asegurar su rendimiento en línea.',
                'price' => 15000.00,
                'img' => 'imagenes/desarrollo_web.jpg',
                'categoria_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Packaging',
                'descripcion' => 'Diseñamos, desarrollamos y producimos packaging con diseños que capturan la esencia de tu marca, logrando que tu producto se destaque y atraiga todas las miradas comunicando la identidad de tu producto.',
                'price' => 15000.00,
                'img' => 'imagenes/packagin.jpg',
                'categoria_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cartelería',
                'descripcion' => 'Realizamos desde el diseño, la fabricación y la instalación de todo tipo de cartelería. Diferentes tipos de formatos y tamaños, diseñados para cada necesidad.',
                'price' => 15000.00,
                'img' => 'imagenes/carteleria.jpg',
                'categoria_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Landing Page',
                'descripcion' => 'El objetivo es diseñar una página sin distracciones y visualmente atractiva que impulse a los usuarios a realizar la acción deseada, ya sea comprar un producto, contratar un servicio, rellenar un formulario, descargar un ebook, inscribirse a un evento.',
                'price' => 15000.00,
                'img' => 'imagenes/landing_page.png',
                'cate_id' => 4,
                'categoria_id' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Diseños de punto de venta',
                'descripcion' => 'Creamos espacios visuales atractivos y funcionales que destacan tu producto, mejoran la experiencia del cliente y potencian tus ventas.',
                'price' => 15000.00,
                'img' => 'imagenes/punto_deVenta.jpg',
                'categoria_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
