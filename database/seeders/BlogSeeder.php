<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('blogs')->insert([

            'title'=>'Cómo elegir el estilo y la paleta de colores para tu marca',
            'subtitle' =>'El estilo y el color son dos factores importantisimos a la hora de crear tu identidad corporativa , por eso en este blog te contaremos como poder llevarlo a cabo.',
            'icono1' => 'icono_texto1.png',
            'texto1' =>'Para crear el estilo y la paleta de colores considero cuidadosamente cuál es la personalidad que quieres transmitir con tu marca.
            Por ejemplo, si tu marca es vanguardista y moderna, optaré por un diseño más contemporáneo, pero si busca resaltar que su personalidad es tradicional
            y confiable, entonces lo adecuado podría ser un estilo clásico.',

            'texto2'=>'Tengo también mis propios métodos para lograr el estilo que te represente, y es escucharte y traducir visualmente lo que percibo sobre tus necesidades o expectativas. En sí, hablamos y nos ponemos de acuerdo para asegurarnos de que estamos en la misma línea. Cuando me compartes las cosas que te inspiran me ayudas a
            conectar con tus gustos y me aportas inspiración en mi proceso creativo.',
            'icono2' => 'icono_texto2.png',
            'texto3'=>'Los colores tienen el poder de evocar emociones y transmitir significados.
            Evalúo como quieres que tu marca sea percibida y qué emociones quieres que se asocien a ella. También utilizo la psicología del color y cómo se relaciona con tu marca y público objetivo.
            Además, busco crear una paleta de colores coherente y versátil. Elijo colores que se complementen entre sí y que funcionen bien en diferentes contextos, tanto en medios impresos como digitales. También aseguro que los colores seleccionados sean accesibles y legibles para garantizar una experiencia óptima para tu audiencia. Esto lo puedes comprobar en los manuales de otras marcas
            que he diseñado que encontrarás en mi web. Te invito a que le eches un vistazo.',
             'icono3' => 'icono_texto3.png',
            'destacado'=>'Para mí, tu marca primero debe conectar contigo, luego, con tu audiencia.',
            'img' =>'ejemplodelogo1.jpg',
            'created_at' => now(),
            'updated_at' => now(),

        ]);
    }
}
