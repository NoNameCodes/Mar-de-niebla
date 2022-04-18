<?php

namespace Database\Seeders;

use App\Models\Reserva;
use Illuminate\Database\Seeder;

class ReservaSeeder extends Seeder
{

    public function run()
    {
        Reserva::factory()->create([
            'name' => 'Caio',
            'date' => '2022-03-20',
            'phone' => '666666666',
            'user_id' => '3',
            'resource_id' => '2',
        ]);

        Reserva::factory()->create([
            'name' => 'Sasha',
            'date' => '2022-03-20',
            'phone' => '666666666',
            'user_id' => '3',
            'resource_id' => '1',
        ]);

        Reserva::factory()->create([
            'name' => 'Irina',
            'date' => '2022-03-20',
            'phone' => '666666666',
            'user_id' => '3',
            'resource_id' => '3',
        ]);

        Reserva::factory()->create([
            'name' => 'Diego',
            'date' => '2022-03-20',
            'phone' => '666666666',
            'user_id' => '3',
            'resource_id' => '7',
        ]);

        Reserva::factory()->create([
            'name' => 'Dani',
            'date' => '2022-03-20',
            'phone' => '666666666',
            'user_id' => '3',
            'resource_id' => '4',
        ]);

        Reserva::factory()->create([
            'name' => 'Alba',
            'date' => '2022-03-20',
            'phone' => '666666666',
            'user_id' => '3',
            'resource_id' => '6',
        ]);
    }
}
