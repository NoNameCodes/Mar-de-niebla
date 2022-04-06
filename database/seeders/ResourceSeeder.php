<?php

namespace Database\Seeders;

use App\Models\Resource;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ResourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Resource::factory()->create([
            'name' => 'Furgoneta',
            'description' => 'furgoneta blanca grande disponible para logística.',
            'img' => 'furgoneta.png',
            'user_id' => '4',
            'location_id' => '1',
        ]);

        Resource::factory()->create([
            'name' => 'Portatil Lenovo',
            'description' => 'Portatil lenovo thinkpad 2022.',
            'img' => 'lenovo-thinkpad.png',
            'user_id' => '4',
            'location_id' => '1',
        ]);

        Resource::factory()->create([
            'name' => 'Camara Nikon',
            'description' => 'Camara de fotos nikon modelo D3200.',
            'img' => 'camara-nikon.jpg',
            'user_id' => '4',
            'location_id' => '1',
        ]);

        Resource::factory()->create([
            'name' => 'Pala Padel',
            'description' => 'Pala padel de adidas.',
            'img' => 'pala-padel.jpeg',
            'user_id' => '4',
            'location_id' => '1',
        ]);

        Resource::factory()->create([
            'name' => 'Bicicleta',
            'description' => 'Bicicleta de paseo.',
            'img' => 'bici.jpeg',
            'user_id' => '4',
            'location_id' => '1',
        ]);

        Resource::factory()->create([
            'name' => 'Aula proyección',
            'description' => 'Aula para proyecciones situada en la calzada.',
            'img' => 'aula-proyeccion.jpeg',
            'user_id' => '4',
            'location_id' => '1',
        ]);

        Resource::factory()->create([
            'name' => 'Pepino',
            'description' => 'Pepino a petición de Diego Cortina.',
            'img' => 'pepino.jpg',
            'user_id' => '4',
            'location_id' => '1',
        ]);
    }
}
