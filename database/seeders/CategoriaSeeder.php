<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // <-- ESTA LÍNEA ES NECESARIA

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

         DB::table('categorias')->Insert([
            [
                'categoria_id'=> 1,
                'name' => 'Branding',
                'intro'=> 'Trabajamos en la creacion de marcar desde su concepto hasta su completa implementación',
                'icono' => 'imagenes/branding.png',
                'subtitle' => 'Trabajamos en equipo con el cliente para construir nuevas marcas que perduren y se destaquen',
                'detalle'=> 'Evaluamos el mercado, el negocio particular, y seleccionamos los valores y atributos fundamentales de la empresa para
                                lograr un concepto diferenciador. Para el desarrollo de una identidad fuerte es necesario comprender las tendencias culturales y del mercado,
                                e identificar las fortalezas y debilidades. Creamos estrategias de Branding para dar valor a su marca. Definimos objetivos para lograr un
                                posicionamiento consistente, estableciendo cuándo, dónde y cómo esa imagen tiene que estar presente frente al consumidor. Trabajamos en la creación
                                y evolución de marcas a través de todo el proceso, desde su concepcion conceptual hasta su completa implementación.',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categoria_id'=> 2,
                'name' => 'Producto y Pop',
                'intro'=>'Realizamos desarrollo de producto, prototipo y servicios enfocados en la exhibición y puntos de venta.',
                'icono' => 'imagenes/pop.png',
                'subtitle' => 'Brindamos soluciones de diseño de producto mediante un mecanismo racional y creativo enfocado
                 a dar soluciones a los objetos de uso.',
                'detalle'=> 'Diseñamos productos que puedan ser fabricados por medios industriales o artesanales según
                                convenga a las condiciones técnicas del mismo y del medio de producción. Nuestro enfoque apunta a pensar
                                y resolver la vida de las personas y su entorno, por eso en Agrego buscamos que los productos y servicios
                                que el hombre necesita sean cada vez mejores, y que tengan un impacto positivo en el ambiente y
                                en quienes los utilizan. Ofrecemos servicios orientados al desarrollo de artículos, prototipos,
                                como así tambien servicios enfocados en la exhibición, stands y puntos de venta.',

                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'categoria_id'=> 3,
                'name' => 'Diseño Gráfico',
                'intro'=>'Diseñamos comunicaciones visuales para transmitir mensajes específicos a grupos sociales determinados.',
                'icono' => 'imagenes/dgrafico.png',
                 'subtitle' => 'Diseñamos comunicaciones visuales para transmitir
                 mensajes específicos a grupos sociales determinados.',
                'detalle'=> 'Hacemos posible comunicar gráficamente ideas, hechos y valores procesados y sintetizados
                                en términos de forma y comunicación. Una Pieza Gráfica requiere de la fijación de objetivos para la cual
                                se realiza, el seguimiento de todos los procesos y un absoluto compromiso. De esta manera no solo logramos
                                un diseño correcto sino que nos comprometemos en el seguimiento de todo el proceso hasta la producción
                                para obtener el resultado esperado.',

                'created_at' => now(),
                'updated_at' => now(),
            ],

              [
                'categoria_id'=> 4,
                'name' => 'Diseño Digital',
                'intro' => 'Desarrollamos webs, landings y micrositios efectivos para que lograr la presencia online más efectiva.',
                'icono' => 'imagenes/ddigital.png',
                'subtitle' => 'Creamos recursos 3D que permiten una comunicación de alto impacto visual,
                                acercando al usuario a la realidad o a una comunicación dinámica.',
                'detalle'=> 'El objetivo es crear una proyección visual que pueda ser
                                presentada en una pantalla o impresión, trabajando en el modelado, texturizado,
                                iluminación, animación y posterior renderizado. Una realización en 3D puede ser estática o
                                bien encontrarse en movimiento, emulando un recorrido por un espacio virtual, dándole acción
                                a un personaje, etc. Tenemos la capacidad técnica para desarrollar renders fotorrealistas de alta
                                calidad y el criterio necesario para crear imágenes o infografías 3D. Trabajamos con nuestros clientes de
                                forma presencial o a través de la red desde Buenos Aires para cualquier parte del mundo.',


                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);
    }
}
